<?php
namespace RExt;

class PusherCustom extends PusherAbstract
{
//    /**
//     * @param string JSON'ified string we'll receive from ZeroMQ
//     */
//    public function onChatMsgSend($entry)
//    {
//        $entryData = $this->decodeJsonEntry($entry);
//        $topicName = $this->getEntryTopicName($entryData);
//
//        // If the lookup topic object isn't set there is no one to publish to
//        if (!array_key_exists($topicName, $this->subscribedTopics)) {
//            return;
//        }
//
//        $topic = $this->subscribedTopics[$topicName];
//
//        // re-send the data to all the clients subscribed to that category
//        $topic->broadcast($entryData);
//    }
}
