<?php

/* AcmeDemoBundle:Demo:view.html.twig */
class __TwigTemplate_4e89bb7275595e5763d0bfc4b0d87f42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Demo - View entry";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>View user with ID: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "id"), "html", null, true);
        echo "</h1>
    <hr>
    <ul>
        <li><b>First Name:</b> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "firstName"), "html", null, true);
        echo "</li>
        <li><b>Last Name:</b> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "lastName"), "html", null, true);
        echo "</li>
        <li>
            <b>Address:</b>
            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "user"), "fullAddress"));
        foreach ($context['_seq'] as $context["_key"] => $context["addressLine"]) {
            // line 16
            echo "                ";
            echo twig_escape_filter($this->env, $this->getContext($context, "addressLine"), "html", null, true);
            echo "<br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addressLine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </li>
        <li><b>Telephone Home:</b> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "telephoneHome"), "html", null, true);
        echo "</li>
        <li><b>Telephone Modile:</b> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "telephoneMobile"), "html", null, true);
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  78 => 19,  75 => 18,  66 => 16,  62 => 15,  56 => 12,  52 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
