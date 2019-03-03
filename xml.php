<?php



$xml="<xml>
    <ToUserName>
        <![CDATA[gh_faf604313ad3]]>
    </ToUserName>
    <FromUserName>
        <![CDATA[oZGxk55rBCIcGeDfdrsn3JAsBrTA]]>
    </FromUserName>
    <CreateTime>1551573479</CreateTime>
    <MsgType>
        <![CDATA[text]]>
    </MsgType>
    <Content>
        <![CDATA[888]]>
    </Content>
    <MsgId>22213191603833441</MsgId>
</xml>";
$dom = new DOMDocument;
$dom->loadXML($xml);

$xpath = new DOMXPath($dom);

$query = '//Content';

$ret = $xpath->query($query);


foreach ($ret as $entry) {
   var_dump($entry->nodeValue);
}