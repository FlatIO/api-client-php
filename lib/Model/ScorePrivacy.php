<?php
/**
 * ScorePrivacy
 *
 * PHP version 5
 *
 * @category Class
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Flat API
 *
 * The Flat API allows you to easily extend the abilities of the [Flat Platform](https://flat.io), with a wide range of use cases including the following:  * Creating and importing new music scores using MusicXML or MIDI files * Browsing, updating, copying, exporting the user's scores (for example in MP3, WAV or MIDI) * Managing educational resources with Flat for Education: creating & updating the organization accounts, the classes, rosters and assignments.  The Flat API is built on HTTP. Our API is RESTful It has predictable resource URLs. It returns HTTP response codes to indicate errors. It also accepts and returns JSON in the HTTP body. The [schema](/swagger.yaml) of this API follows the [OpenAPI Initiative (OAI) specification](https://www.openapis.org/), you can use and work with [compatible Swagger tools](http://swagger.io/open-source-integrations/). This API features Cross-Origin Resource Sharing (CORS) implemented in compliance with [W3C spec](https://www.w3.org/TR/cors/).  You can use your favorite HTTP/REST library for your programming language to use Flat's API. This specification and reference is [available on Github](https://github.com/FlatIO/api-reference).  Getting Started and learn more:  * [API Overview and interoduction](https://flat.io/developers/docs/api/) * [Authentication (Personal Access Tokens or OAuth2)](https://flat.io/developers/docs/api/authentication.html) * [SDKs](https://flat.io/developers/docs/api/sdks.html) * [Rate Limits](https://flat.io/developers/docs/api/rate-limits.html) * [Changelog](https://flat.io/developers/docs/api/changelog.html)
 *
 * OpenAPI spec version: 2.6.0
 * Contact: developers@flat.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Flat\APIClient\Model;
use \Flat\APIClient\ObjectSerializer;

/**
 * ScorePrivacy Class Doc Comment
 *
 * @category Class
 * @description The score main privacy mode.  - &#x60;public&#x60;: The score is public on the Internet. This one can be accessible at the url &#x60;https://flat.io/score/{score}&#x60; and can be modified and administred by specified collaborators users. - &#x60;private&#x60;: The score is private and can be only accessed, modified and administred by specified collaborators users. - &#x60;privateLink&#x60;: The score is private but can be accessed using a private link &#x60;htmlUrl&#x60; or the private key in the property &#x60;sharingKey&#x60;. - &#x60;organizationPublic&#x60;: _Available only with [Flat for Education](https://flat.io/edu)._ The score is public in the organization: users of the same organization can access to this one. The score can be modified and administred by specified collaborators users.  The score can also be individually shared to a set of users or groups using the different collaborators API methods.  When a file is synchronized from an external source (e.g. Google Drive) and the sharing options are changed on the source, Flat will chose the best privacy mode for the file.  When using a [Flat for Education](https://flat.io/edu) account, some of the modes may not be available if disabled by an administrator of the organization (e.g. by default the &#x60;public&#x60; mode is not available).
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScorePrivacy
{
    /**
     * Possible values of this enum
     */
    const _PUBLIC = 'public';
    const _PRIVATE = 'private';
    const ORGANIZATION_PUBLIC = 'organizationPublic';
    const PRIVATE_LINK = 'privateLink';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_PUBLIC,
            self::_PRIVATE,
            self::ORGANIZATION_PUBLIC,
            self::PRIVATE_LINK,
        ];
    }
}


