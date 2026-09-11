# ScoreCreationBuilderDataAllOfBuilderDataScoreData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**use_tab_staff** | **bool** | true if the TAB staff is displayed with fretted instruments | [optional]
**use_chord_grid** | **bool** | true if the chord grid must be displayed with fretted instruments | [optional]
**fifths** | **float** | The key signature of the score (expressed between -7 and 7). Major C is used when the value is not provided. | [optional]
**nb_beats** | **float** | The number of beats in the measure | [optional]
**beat_type** | **float** | The duration of a beat in the measure | [optional]
**instruments** | [**\Flat\APIClient\Model\ScoreCreationBuilderDataAllOfBuilderDataScoreDataInstruments[]**](ScoreCreationBuilderDataAllOfBuilderDataScoreDataInstruments.md) | The list of instruments to add to the score. See the [Instrument IDs reference](https://flat.io/developers/docs/api/instruments) for the possible values for &#x60;group&#x60; and &#x60;instrument&#x60; (also available as the [&#x60;@flat/instruments&#x60;](https://www.npmjs.com/package/@flat/instruments) package). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
