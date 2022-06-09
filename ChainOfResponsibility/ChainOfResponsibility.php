<?php

interface ITranslator {
    public function setNext();
    public function translate();
}

abstract class Translator {

    protected $nextTranslator;

    public function setNext(Translator $translator) {
        $this->nextTranslator = $translator;

        return $translator;
    }

    public function translate(string $document) {
        
        if( $this->nextTranslator ) {
            return $this->nextTranslator->translate($document);
        }

        return "Произошла ошибка";
    }
}

class LatinTranslator extends Translator {

    public function translate(string $document) {
        
        if($document == 'la') {
            return "Перевод с латинского языка на русский";
        } else {
            return parent::translate($document);
        }
    }
}

class EnglishTranslator extends Translator {

    public function translate(string $document) {
        
        if($document == 'en') {
            return "Перевод с английского языка на русский";
        } else {
            return parent::translate($document);
        }
    }
}

class GermanTranslator extends Translator {

    public function translate(string $document) {
        
        if($document == 'de') {
            return "Перевод с немецкого языка на русский";
        } else {
            return parent::translate($document);
        }
    }
}

