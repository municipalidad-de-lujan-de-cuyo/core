<?php

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Novosga\Entity;

/**
  * PainelServico
  *
  * @author Rogerio Lino <rogeriolino@gmail.com>
  */
class PainelServico implements \JsonSerializable
{
    /**
     * @var Painel
     */
    private $painel;

    /**
     * @var Servico
     */
    private $servico;

    /**
     * @var Unidade
     */
    private $unidade;

    public function getPainel()
    {
        return $this->painel;
    }

    public function setPainel($painel)
    {
        $this->painel = $painel;
    }

    public function getServico()
    {
        return $this->servico;
    }

    public function setServico($servico)
    {
        $this->servico = $servico;
    }

    public function getUnidade()
    {
        return $this->unidade;
    }

    public function setUnidade($unidade)
    {
        $this->unidade = $unidade;
    }

    public function jsonSerialize()
    {
        return [
           'painel'  => $this->getPainel(),
           'servico' => $this->getServico(),
           'unidade' => $this->getUnidade(),
        ];
    }
}
