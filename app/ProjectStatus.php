<?php

namespace App;

enum ProjectStatus: string
{
    case Open = 'open';
    case Closed = 'closed';

    public function label(): string {
        if ($this == self::Open) {
            return 'Aceitando propostas';
        }
        if ($this == self::Closed) {
            return 'Encerrado';
        }

        /*
        Outra forma:
            return match($this) {
                self::Open => 'Aceitando propostas',
                self::Closed => 'Encerrado'
            };
        */
    }
}
