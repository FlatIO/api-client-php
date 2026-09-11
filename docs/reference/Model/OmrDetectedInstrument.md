# OmrDetectedInstrument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** | 0-based position of the part in the score. |
**part_name** | **string** | Verbatim part name read from the score. | [optional]
**instrument_id** | **string** | Flat instrument ID in dotted &#x60;&lt;group&gt;.&lt;instrument&gt;&#x60; form, for example &#x60;brass.horn&#x60; or &#x60;vocals.voice-oohs&#x60;. See the [Instrument IDs reference](https://flat.io/developers/docs/api/instruments). Always the canonical (non-premium) ID. | [optional]
**instrument_name** | **string** | Localized display name, resolved server-side so the client needs no instruments dictionary. | [optional]
**midi_program** | **int** | General MIDI program number. | [optional]
**transpose_key** | **string** | Transposition or written key shown in the UI, for example &#x60;F&#x60; for Horn in F. | [optional]
**resolved_confidence** | **string** | Server confidence in the resolved instrument match. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
