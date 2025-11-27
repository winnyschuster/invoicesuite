<?php

declare(strict_types=1);

namespace horstoeko\invoicesuite\documents\models\ubl\cac;

use JMS\Serializer\Annotation as JMS;
use horstoeko\invoicesuite\concerns\HandlesObjectFlags;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Login;
use horstoeko\invoicesuite\documents\models\ubl\cbc\Password;
use horstoeko\invoicesuite\documents\models\ubl\cbc\URI;

class WebSiteAccessType
{
    use HandlesObjectFlags;

    /**
     * @var URI|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\URI")
     * @JMS\Expose
     * @JMS\SerializedName("URI")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getURI", setter="setURI")
     */
    private $uRI;

    /**
     * @var Password|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Password")
     * @JMS\Expose
     * @JMS\SerializedName("Password")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getPassword", setter="setPassword")
     */
    private $password;

    /**
     * @var Login|null
     * @JMS\Groups({"ubl"})
     * @JMS\Type("horstoeko\invoicesuite\documents\models\ubl\cbc\Login")
     * @JMS\Expose
     * @JMS\SerializedName("Login")
     * @JMS\XmlElement(namespace="urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2", cdata=false)
     * @JMS\Accessor(getter="getLogin", setter="setLogin")
     */
    private $login;

    /**
     * @return URI|null
     */
    public function getURI(): ?URI
    {
        return $this->uRI;
    }

    /**
     * @return URI
     */
    public function getURIWithCreate(): URI
    {
        $this->uRI = is_null($this->uRI) ? new URI() : $this->uRI;

        return $this->uRI;
    }

    /**
     * @param URI|null $uRI
     * @return static
     */
    public function setURI(?URI $uRI = null): static
    {
        $this->uRI = $uRI;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetURI(): static
    {
        $this->uRI = null;

        return $this;
    }

    /**
     * @return Password|null
     */
    public function getPassword(): ?Password
    {
        return $this->password;
    }

    /**
     * @return Password
     */
    public function getPasswordWithCreate(): Password
    {
        $this->password = is_null($this->password) ? new Password() : $this->password;

        return $this->password;
    }

    /**
     * @param Password|null $password
     * @return static
     */
    public function setPassword(?Password $password = null): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetPassword(): static
    {
        $this->password = null;

        return $this;
    }

    /**
     * @return Login|null
     */
    public function getLogin(): ?Login
    {
        return $this->login;
    }

    /**
     * @return Login
     */
    public function getLoginWithCreate(): Login
    {
        $this->login = is_null($this->login) ? new Login() : $this->login;

        return $this->login;
    }

    /**
     * @param Login|null $login
     * @return static
     */
    public function setLogin(?Login $login = null): static
    {
        $this->login = $login;

        return $this;
    }

    /**
     * @return static
     */
    public function unsetLogin(): static
    {
        $this->login = null;

        return $this;
    }
}
