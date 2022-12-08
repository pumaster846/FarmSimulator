<?php
namespace Traits;

trait Message {
    public function printInfoMessage($text) : void {
        print("<div>$text</div>");
    }
}