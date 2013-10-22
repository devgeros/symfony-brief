<?php

/* AcmeAddressbookBundle:Addressbook:edit.html.twig */
class __TwigTemplate_75aa506506ae63db1ac998a56d84f39c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeAddressbookBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeAddressbookBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Address book - Edit user";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Edit user with ID: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "id"), "html", null, true);
        echo "</h1>
    <hr>
    <br>
    ";
        // line 10
        $this->env->loadTemplate("AcmeAddressbookBundle:partials:form.html.twig")->display(array_merge($context, array("form" => $this->getContext($context, "form"), "formAction" => $this->env->getExtension('routing')->getPath("_addressbook_edit", array("id" => $this->getAttribute($this->getContext($context, "user"), "id"))))));
    }

    public function getTemplateName()
    {
        return "AcmeAddressbookBundle:Addressbook:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
