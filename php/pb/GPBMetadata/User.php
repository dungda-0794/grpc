<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user.proto

namespace GPBMetadata;

class User
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0ace020a0a757365722e70726f746f120475736572229d010a0455736572120a0a026964180120012809120c0a046e616d65180220012809120d0a05656d61696c18032001280912230a076164647265737318042003280b32122e757365722e557365722e416464726573731a470a0741646472657373120e0a06737472656574180120012809120c0a0463697479180220012809120d0a057374617465180320012809120f0a07636f756e747279180420012809221d0a0a47657452657175657374120f0a076b6579776f726418012001280922380a0b476574526573706f6e7365120e0a0673746174757318012001280912190a05757365727318022003280b320a2e757365722e5573657232390a047573657212310a08476574557365727312102e757365722e476574526571756573741a112e757365722e476574526573706f6e73652200620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

