<?php

declare(strict_types=1);

/*
 * JsonValueTesterLib
 *
 * This file was automatically generated for Stamplay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace JsonValueTesterLib\Tests\Controllers;

use Core\TestCase\BodyMatchers\KeysAndValuesBodyMatcher;
use Core\TestCase\TestParam;
use JsonValueTesterLib\Controllers\JsonObjController;
use JsonValueTesterLib\Exceptions;
use JsonValueTesterLib\Models;

class JsonObjControllerTest extends BaseTestController
{
    /**
     * @var JsonObjController JsonObjController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getJsonObjController();
    }

    public function testSendSchemaInModel()
    {
        // Parameters for the API call
        $body = TestParam::object(
            '{"name":"a name","id":"definition-123","schemaMap":{"key1":{"$id":"https://example' .
            '.com/person.schema.json","$schema":"https://json-schema.org/draft/2020-12/schema","' .
            'title":"Person","type":"object","properties":{"firstName":{"type":"string","descrip' .
            'tion":"The person\'s first name."},"lastName":{"type":"string","description":"The p' .
            'erson\'s last name.","test":null},"age":{"type":"integer","description":"Age in yea' .
            'rs","minimum":0}}},"key2":{"$id":"https://example.com/person.schema.json","$schema"' .
            ':"https://json-schema.org/draft/2020-12/schema","title":"Person","type":"object","p' .
            'roperties":{"firstName":{"type":"string","description":"The person\'s first name."}' .
            ',"lastName":{"type":"string","description":"The person\'s last name.","test":null},' .
            '"age":{"type":"integer","description":"Age in years","minimum":0}}}},"schemaArray":' .
            '[{"$id":"https://example.com/person.schema.json","$schema":"https://json-schema.org' .
            '/draft/2020-12/schema","title":"Person","type":"object","properties":{"firstName":{' .
            '"type":"string","description":"The person\'s first name."},"lastName":{"type":"stri' .
            'ng","description":"The person\'s last name.","test":null},"age":{"type":"integer","' .
            'description":"Age in years","minimum":0}}},{"$id":"https://example.com/person.schem' .
            'a.json","$schema":"https://json-schema.org/draft/2020-12/schema","title":"Person","' .
            'type":"object","properties":{"firstName":{"type":"string","description":"The person' .
            '\'s first name."},"lastName":{"type":"string","description":"The person\'s last nam' .
            'e.","test":null},"age":{"type":"integer","description":"Age in years","minimum":0}}' .
            '}],"schema":{"$id":"https://example.com/person.schema.json","$schema":"https://json' .
            '-schema.org/draft/2020-12/schema","title":"Person","type":"object","properties":{"f' .
            'irstName":{"type":"string","description":"The person\'s first name."},"lastName":{"' .
            'type":"string","description":"The person\'s last name.","test":null},"age":{"type":' .
            '"integer","description":"Age in years","minimum":0}}}}',
            Models\SchemaContainer::class
        );

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->sendSchemainModel($body);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(KeysAndValuesBodyMatcher::init(TestParam::object('{"passed":true}')))
            ->assert();
    }

    public function testSendSchemaAsBody()
    {
        // Parameters for the API call
        $body = '{"$id":"https://example.com/person.schema.json","$schema":"https://json-schema' .
        '.org/draft/2020-12/schema","title":"Person","type":"object","properties":{"firstName":{' .
        '"type":"string","description":"The person\'s first name."},"lastName":{"type":"string",' .
        '"description":"The person\'s last name.","test":null},"age":{"type":"integer","descript' .
        'ion":"Age in years","minimum":0}}}';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->sendSchemaasBody($body);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(KeysAndValuesBodyMatcher::init(TestParam::object(
                '{"passed":true,"message":"OK","nullableNumberMap":{"luckydraw1":null,"luckydra' .
                'w2":88.1,"luckydraw3":89.1,"luckydraw4":null,"luckydraw5":91.1},"nullableNumber' .
                'Array":[null, 88.1, 89.1, null, 91.1]}'
            )))
            ->assert();
    }

    public function testSendSchemaAsForm()
    {
        // Parameters for the API call
        $input = [];
        $input['contentType'] =
            Models\ContentType::ENUM_APPLICATIONXWWWFORMURLENCODED;
        $input['id'] = 54;
        $input['model'] = '{"$id":"https://example.com/person.schema.json","$schema":"https://j' .
        'son-schema.org/draft/2020-12/schema","title":"Person","type":"object","properties":{"fi' .
        'rstName":{"type":"string","description":"The person\'s first name."},"lastName":{"type"' .
        ':"string","description":"The person\'s last name.","test":null},"age":{"type":"integer"' .
        ',"description":"Age in years","minimum":0}}}';
        $input['modelArray'] = '[{"$id":"https://example.com/person.schema.json","$schema":"htt' .
        'ps://json-schema.org/draft/2020-12/schema","title":"Person","type":"object","properties' .
        '":{"firstName":{"type":"string","description":"The person\'s first name."},"lastName":{' .
        '"type":"string","description":"The person\'s last name.","test":null},"age":{"type":"in' .
        'teger","description":"Age in years","minimum":0}}},{"$id":"https://example.com/person.s' .
        'chema.json","$schema":"https://json-schema.org/draft/2020-12/schema","title":"Person","' .
        'type":"object","properties":{"firstName":{"type":"string","description":"The person\'s ' .
        'first name."},"lastName":{"type":"string","description":"The person\'s last name.","tes' .
        't":null},"age":{"type":"integer","description":"Age in years","minimum":0}}}]';
        $input['modelMap'] = '{"key1":{"$id":"https://example.com/person.schema.json","$schema"' .
        ':"https://json-schema.org/draft/2020-12/schema","title":"Person","type":"object","prope' .
        'rties":{"firstName":{"type":"string","description":"The person\'s first name."},"lastNa' .
        'me":{"type":"string","description":"The person\'s last name.","test":null},"age":{"type' .
        '":"integer","description":"Age in years","minimum":0}}},"key2":{"$id":"https://example.' .
        'com/person.schema.json","$schema":"https://json-schema.org/draft/2020-12/schema","title' .
        '":"Person","type":"object","properties":{"firstName":{"type":"string","description":"Th' .
        'e person\'s first name."},"lastName":{"type":"string","description":"The person\'s last' .
        ' name.","test":null},"age":{"type":"integer","description":"Age in years","minimum":0}}' .
        '}}';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->sendSchemaasForm($input);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(KeysAndValuesBodyMatcher::init(TestParam::object('{"passed":true}')))
            ->assert();
    }

    public function testSendSchemaAsQuery()
    {
        // Parameters for the API call
        $input = [];
        $input['id'] = 54;
        $input['model'] = '{"$id":"https://example.com/person.schema.json","$schema":"https://j' .
        'son-schema.org/draft/2020-12/schema","title":"Person","type":"object","properties":{"fi' .
        'rstName":{"type":"string","description":"The person\'s first name."},"lastName":{"type"' .
        ':"string","description":"The person\'s last name.","test":null},"age":{"type":"integer"' .
        ',"description":"Age in years","minimum":0}}}';
        $input['modelArray'] = '[{"$id":"https://example.com/person.schema.json","$schema":"htt' .
        'ps://json-schema.org/draft/2020-12/schema","title":"Person","type":"object","properties' .
        '":{"firstName":{"type":"string","description":"The person\'s first name."},"lastName":{' .
        '"type":"string","description":"The person\'s last name.","test":null},"age":{"type":"in' .
        'teger","description":"Age in years","minimum":0}}},{"$id":"https://example.com/person.s' .
        'chema.json","$schema":"https://json-schema.org/draft/2020-12/schema","title":"Person","' .
        'type":"object","properties":{"firstName":{"type":"string","description":"The person\'s ' .
        'first name."},"lastName":{"type":"string","description":"The person\'s last name.","tes' .
        't":null},"age":{"type":"integer","description":"Age in years","minimum":0}}}]';
        $input['modelMap'] = '{"key1":{"$id":"https://example.com/person.schema.json","$schema"' .
        ':"https://json-schema.org/draft/2020-12/schema","title":"Person","type":"object","prope' .
        'rties":{"firstName":{"type":"string","description":"The person\'s first name."},"lastNa' .
        'me":{"type":"string","description":"The person\'s last name.","test":null},"age":{"type' .
        '":"integer","description":"Age in years","minimum":0}}},"key2":{"$id":"https://example.' .
        'com/person.schema.json","$schema":"https://json-schema.org/draft/2020-12/schema","title' .
        '":"Person","type":"object","properties":{"firstName":{"type":"string","description":"Th' .
        'e person\'s first name."},"lastName":{"type":"string","description":"The person\'s last' .
        ' name.","test":null},"age":{"type":"integer","description":"Age in years","minimum":0}}' .
        '}}';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->sendSchemaasQuery($input);
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(KeysAndValuesBodyMatcher::init(TestParam::object('{"passed":true}')))
            ->assert();
    }

    public function testGetSchema()
    {
        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getSchema();
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(KeysAndValuesBodyMatcher::init(TestParam::object(
                '{"$id":"https://example.com/person.schema.json","$schema":"https://json-schema' .
                '.org/draft/2020-12/schema","title":"Person","type":"object","properties":{"firs' .
                'tName":{"type":"string","description":"The person\'s first name."},"lastName":{' .
                '"type":"string","description":"The person\'s last name.","test":null},"age":{"t' .
                'ype":"integer","description":"Age in years","minimum":0}}}'
            )))
            ->assert();
    }

    public function testGetSchemaArray()
    {
        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getSchemaArray();
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(KeysAndValuesBodyMatcher::init(TestParam::object(
                '[{"$id":"https://example.com/person.schema.json","$schema":"https://json-schem' .
                'a.org/draft/2020-12/schema","title":"Person","type":"object","properties":{"fir' .
                'stName":{"type":"string","description":"The person\'s first name."},"lastName":' .
                '{"type":"string","description":"The person\'s last name.","test":null},"age":{"' .
                'type":"integer","description":"Age in years","minimum":0}}},{"$id":"https://exa' .
                'mple.com/person.schema.json","$schema":"https://json-schema.org/draft/2020-12/s' .
                'chema","title":"Person","type":"object","properties":{"firstName":{"type":"stri' .
                'ng","description":"The person\'s first name."},"lastName":{"type":"string","des' .
                'cription":"The person\'s last name.","test":null},"age":{"type":"integer","desc' .
                'ription":"Age in years","minimum":0}}}]'
            )))
            ->assert();
    }

    public function testGetSchemaMap()
    {
        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getSchemaMap();
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(KeysAndValuesBodyMatcher::init(TestParam::object(
                '{"key1":{"$id":"https://example.com/person.schema.json","$schema":"https://jso' .
                'n-schema.org/draft/2020-12/schema","title":"Person","type":"object","properties' .
                '":{"firstName":{"type":"string","description":"The person\'s first name."},"las' .
                'tName":{"type":"string","description":"The person\'s last name.","test":null},"' .
                'age":{"type":"integer","description":"Age in years","minimum":0}}},"key2":{"$id' .
                '":"https://example.com/person.schema.json","$schema":"https://json-schema.org/d' .
                'raft/2020-12/schema","title":"Person","type":"object","properties":{"firstName"' .
                ':{"type":"string","description":"The person\'s first name."},"lastName":{"type"' .
                ':"string","description":"The person\'s last name.","test":null},"age":{"type":"' .
                'integer","description":"Age in years","minimum":0}}}}'
            )))
            ->assert();
    }

    public function testGetSchemaInModel()
    {
        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getSchemainModel();
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->bodyMatcher(KeysAndValuesBodyMatcher::init(TestParam::object(
                '{"name":"a name","id":"definition-123","schemaMap":{"key1":{"$id":"https://exa' .
                'mple.com/person.schema.json","$schema":"https://json-schema.org/draft/2020-12/s' .
                'chema","title":"Person","type":"object","properties":{"firstName":{"type":"stri' .
                'ng","description":"The person\'s first name."},"lastName":{"type":"string","des' .
                'cription":"The person\'s last name.","test":null},"age":{"type":"integer","desc' .
                'ription":"Age in years","minimum":0}}},"key2":{"$id":"https://example.com/perso' .
                'n.schema.json","$schema":"https://json-schema.org/draft/2020-12/schema","title"' .
                ':"Person","type":"object","properties":{"firstName":{"type":"string","descripti' .
                'on":"The person\'s first name."},"lastName":{"type":"string","description":"The' .
                ' person\'s last name.","test":null},"age":{"type":"integer","description":"Age ' .
                'in years","minimum":0}}}},"schemaArray":[{"$id":"https://example.com/person.sch' .
                'ema.json","$schema":"https://json-schema.org/draft/2020-12/schema","title":"Per' .
                'son","type":"object","properties":{"firstName":{"type":"string","description":"' .
                'The person\'s first name."},"lastName":{"type":"string","description":"The pers' .
                'on\'s last name.","test":null},"age":{"type":"integer","description":"Age in ye' .
                'ars","minimum":0}}},{"$id":"https://example.com/person.schema.json","$schema":"' .
                'https://json-schema.org/draft/2020-12/schema","title":"Person","type":"object",' .
                '"properties":{"firstName":{"type":"string","description":"The person\'s first n' .
                'ame."},"lastName":{"type":"string","description":"The person\'s last name.","te' .
                'st":null},"age":{"type":"integer","description":"Age in years","minimum":0}}}],' .
                '"schema":{"$id":"https://example.com/person.schema.json","$schema":"https://jso' .
                'n-schema.org/draft/2020-12/schema","title":"Person","type":"object","properties' .
                '":{"firstName":{"type":"string","description":"The person\'s first name."},"las' .
                'tName":{"type":"string","description":"The person\'s last name.","test":null},"' .
                'age":{"type":"integer","description":"Age in years","minimum":0}}}}'
            )))
            ->assert();
    }
}
