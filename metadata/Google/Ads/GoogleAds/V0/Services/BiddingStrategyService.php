<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/bidding_strategy_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V0\Services;

class BiddingStrategyService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V0\Resources\BiddingStrategy::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aef0c0a3f676f6f676c652f6164732f676f6f676c656164732f76302f73" .
            "657276696365732f62696464696e675f73747261746567795f7365727669" .
            "63652e70726f746f1220676f6f676c652e6164732e676f6f676c65616473" .
            "2e76302e73657276696365731a1c676f6f676c652f6170692f616e6e6f74" .
            "6174696f6e732e70726f746f1a20676f6f676c652f70726f746f6275662f" .
            "6669656c645f6d61736b2e70726f746f1a1e676f6f676c652f70726f746f" .
            "6275662f77726170706572732e70726f746f1a17676f6f676c652f727063" .
            "2f7374617475732e70726f746f22320a1947657442696464696e67537472" .
            "61746567795265717565737412150a0d7265736f757263655f6e616d6518" .
            "012001280922b5010a1e4d757461746542696464696e6753747261746567" .
            "6965735265717565737412130a0b637573746f6d65725f69641801200128" .
            "09124e0a0a6f7065726174696f6e7318022003280b323a2e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76302e73657276696365732e426964" .
            "64696e6753747261746567794f7065726174696f6e12170a0f7061727469" .
            "616c5f6661696c75726518032001280812150a0d76616c69646174655f6f" .
            "6e6c7918042001280822f6010a1842696464696e6753747261746567794f" .
            "7065726174696f6e122f0a0b7570646174655f6d61736b18042001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e4669656c644d61736b12440a" .
            "0663726561746518012001280b32322e676f6f676c652e6164732e676f6f" .
            "676c656164732e76302e7265736f75726365732e42696464696e67537472" .
            "6174656779480012440a0675706461746518022001280b32322e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76302e7265736f75726365732e" .
            "42696464696e675374726174656779480012100a0672656d6f7665180320" .
            "0128094800420b0a096f7065726174696f6e22a4010a1f4d757461746542" .
            "696464696e6753747261746567696573526573706f6e736512310a157061" .
            "727469616c5f6661696c7572655f6572726f7218032001280b32122e676f" .
            "6f676c652e7270632e537461747573124e0a07726573756c747318022003" .
            "280b323d2e676f6f676c652e6164732e676f6f676c656164732e76302e73" .
            "657276696365732e4d757461746542696464696e67537472617465677952" .
            "6573756c7422340a1b4d757461746542696464696e675374726174656779" .
            "526573756c7412150a0d7265736f757263655f6e616d6518012001280932" .
            "c1030a1642696464696e6753747261746567795365727669636512c2010a" .
            "1247657442696464696e675374726174656779123b2e676f6f676c652e61" .
            "64732e676f6f676c656164732e76302e73657276696365732e4765744269" .
            "6464696e675374726174656779526571756573741a322e676f6f676c652e" .
            "6164732e676f6f676c656164732e76302e7265736f75726365732e426964" .
            "64696e675374726174656779223b82d3e493023512332f76302f7b726573" .
            "6f757263655f6e616d653d637573746f6d6572732f2a2f62696464696e67" .
            "537472617465676965732f2a7d12e1010a174d757461746542696464696e" .
            "675374726174656769657312402e676f6f676c652e6164732e676f6f676c" .
            "656164732e76302e73657276696365732e4d757461746542696464696e67" .
            "53747261746567696573526571756573741a412e676f6f676c652e616473" .
            "2e676f6f676c656164732e76302e73657276696365732e4d757461746542" .
            "696464696e6753747261746567696573526573706f6e7365224182d3e493" .
            "023b22362f76302f637573746f6d6572732f7b637573746f6d65725f6964" .
            "3d2a7d2f62696464696e67537472617465676965733a6d75746174653a01" .
            "2a4282020a24636f6d2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76302e7365727669636573421b42696464696e67537472617465677953" .
            "65727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f" .
            "72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f" .
            "676c656164732f76302f73657276696365733b7365727669636573a20203" .
            "474141aa0220476f6f676c652e4164732e476f6f676c654164732e56302e" .
            "5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164" .
            "735c56305c5365727669636573ea0224476f6f676c653a3a4164733a3a47" .
            "6f6f676c654164733a3a56303a3a5365727669636573620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

