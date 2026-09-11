#!/usr/bin/env python3
"""Flat-branded User-Agent that tracks the package version. Idempotent.

The generator bakes its own literal from `artifactVersion` in generator config, which is a separate
number from VERSION and drifts from it. This reads VERSION at generation time, so the two cannot
disagree.
"""

from __future__ import annotations

import pathlib
import re
import sys

ROOT = pathlib.Path(__file__).resolve().parent.parent.parent
TARGET = ROOT / "src" / "Configuration.php"
version = (ROOT / "VERSION").read_text().strip()

text = TARGET.read_text()
# Match the whole line. Our replacement concatenates PHP_VERSION, so it contains both quotes and a
# semicolon: a literal-only or up-to-semicolon pattern would either miss it on the second run or
# truncate mid-string. The property is always emitted on one line.
pattern = re.compile(r"^ *protected string \$userAgent = .*$", re.M)
if not pattern.search(text):
    sys.exit("80_user_agent: could not find the userAgent property (FR-025)")

text = pattern.sub(
    f"    protected string $userAgent = 'Flat-SDK-PHP/{version} "
    "(php/' . PHP_VERSION . ')';",
    text,
    count=1,
)
TARGET.write_text(text)
print(f"    user-agent: Flat-SDK-PHP/{version}")
