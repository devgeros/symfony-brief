<?php

/* AcmeAddressbookBundle:Addressbook:view.html.twig */
class __TwigTemplate_30e581572e0e522668b22794ab11440c extends Twig_Template
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
        echo "Address book - View entry";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>View user with ID: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "id"), "html", null, true);
        echo "</h1>
    <hr>
    <ul>
        <li><b>First Name:</b> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "firstName"), "html", null, true);
        echo "</li>
        <li><b>Last Name:</b> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "lastName"), "html", null, true);
        echo "</li>
        <li>
            <b>Address:</b>
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "user"), "fullAddress"));
        foreach ($context['_seq'] as $context["_key"] => $context["addressLine"]) {
            // line 14
            echo "                ";
            echo twig_escape_filter($this->env, $this->getContext($context, "addressLine"), "html", null, true);
            echo "<br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addressLine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </li>
        <li><b>Telephone Home:</b> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "telephoneHome"), "html", null, true);
        echo "</li>
        <li><b>Telephone Modile:</b> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "telephoneMobile"), "html", null, true);
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeAddressbookBundle:Addressbook:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  71 => 17,  68 => 16,  59 => 14,  55 => 13,  49 => 10,  45 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
