<?php
namespace Api;

/**
 *
 * @author Diego
 *
 */
class Diego extends Model
{

    /**
     * batatinhas 123
     */
    public function __construct ()
    {
        return 'ok';
    }

    /**
     * cabummm
     * 1222
     * @ORM\Column(type="string", length=20, unique=true)
     * @ teste
     */
    public function teste()
    {
        return 'batatinhas';
    }
}

?>