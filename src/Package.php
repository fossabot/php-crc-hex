<?php

declare(strict_types=1);
/**
 * This file is part of Code Ai.
 *
 * @version 1.0.0
 * @author @小小只^v^ <littlezov@qq.com>  littlezov@qq.com
 * @contact  littlezov@qq.com
 * @link     https://github.com/littlezo
 * @document https://github.com/littlezo/wiki
 * @license  https://github.com/littlezo/MozillaPublicLicense/blob/main/LICENSE
 *
 */
namespace littler\CrcHex;

class Package
{
    private $deviceSN;

    private $version;

    private $connectType;

    private $command;

    private $dataLength;

    private $data;

    private $seq;

    private $signature;

    private $eof;

    public function __construct($deviceSN, $version, $connectType, $command, $dataLength, $data, $seq, $signature, $eof)
    {
        $this->deviceSN = $deviceSN;
        $this->version = $version;
        $this->connectType = $connectType;
        $this->command = $command;
        $this->dataLength = $dataLength;
        $this->data = $data;
        $this->seq = $seq;
        $this->signature = $signature;
        $this->eof = $eof;
        return $this;
    }

    public function getDeviceSN()
    {
        return $this->deviceSN;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function getConnectType()
    {
        return $this->connectType;
    }

    public function getCommand()
    {
        return $this->command;
    }

    public function getDataLength()
    {
        return $this->dataLength;
    }

    public function getDataLengthDec()
    {
        return hexdec($this->dataLength);
    }

    public function getData()
    {
        return $this->data;
    }

    public function getSeq()
    {
        return $this->seq;
    }

    public function getSignature()
    {
        return $this->signature;
    }

    public function getEof()
    {
        return $this->eof;
    }

    public function toString()
    {
        return $this->deviceSN . $this->version . $this->connectType . $this->command . $this->dataLength . $this->data . $this->seq . $this->signature . $this->eof;
    }
}
