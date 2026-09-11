# OmrInstrumentOverride

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** | 0-based position of the part to override, matching the &#x60;index&#x60; of the detected part. |
**instrument_id** | **string** | Override the resolved instrument with this Flat instrument id, for example &#x60;brass.horn&#x60;. See the [Instrument IDs reference](https://flat.io/developers/docs/api/instruments) for valid values. Both the dotted &#x60;&lt;group&gt;.&lt;instrument&gt;&#x60; form (&#x60;brass.horn&#x60;) and the bare instrument key (&#x60;horn&#x60;) are accepted. Use this or &#x60;midiProgram&#x60;. Takes precedence over &#x60;midiProgram&#x60; when both are set. | [optional]
**part_name** | **string** | Override the part name. | [optional]
**transpose_key** | **string** | Override the transposition / written key: a pitch class as a letter &#x60;A&#x60;-&#x60;G&#x60; with an optional accidental. For example &#x60;F&#x60; for Horn in F or &#x60;Bb&#x60; for a B flat clarinet.  The accidental may be ASCII &#x60;b&#x60; (flat) or &#x60;#&#x60; (sharp), or the Unicode music glyphs &#x60;♭&#x60; (U+266D) and &#x60;♯&#x60; (U+266F). Unicode accidentals are normalized to their ASCII equivalent, so &#x60;B♭&#x60; is stored and returned as &#x60;Bb&#x60;. | [optional]
**midi_program** | **int** | Override the instrument with a standard General MIDI program number (0-127), resolved server-side to the matching Flat instrument. Use this when you do not want to map Flat instrument ids. Ignored if &#x60;instrumentId&#x60; is also set. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
