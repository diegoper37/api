<?php
namespace Api\Route;
/**
 *
 * @author Diego
 * @Route("route class")
 */
class Diego
{
    /** @Route("route atributo") */
    protected $batatinhas = 'ok';

    /**
     * @Route("route metodo 1")
     * @Route("route metodo 2")
     */
    public function teste( $param )
    {
        return 'batatinhas';
    }

    public function teste2( $param )
    {
        return 'batatinhas';
    }
}

?>