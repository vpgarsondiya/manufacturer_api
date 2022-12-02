<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* manufacturer/show.html.twig */
class __TwigTemplate_e427e0f27b9e76fa024aaa1ae2b1e5b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manufacturer/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "manufacturer/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Manufacturer";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Manufacturer</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["manufacturer"]) || array_key_exists("manufacturer", $context) ? $context["manufacturer"] : (function () { throw new RuntimeError('Variable "manufacturer" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["manufacturer"]) || array_key_exists("manufacturer", $context) ? $context["manufacturer"] : (function () { throw new RuntimeError('Variable "manufacturer" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["manufacturer"]) || array_key_exists("manufacturer", $context) ? $context["manufacturer"] : (function () { throw new RuntimeError('Variable "manufacturer" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CountryCode</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["manufacturer"]) || array_key_exists("manufacturer", $context) ? $context["manufacturer"] : (function () { throw new RuntimeError('Variable "manufacturer" does not exist.', 24, $this->source); })()), "countryCode", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ListedDate</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["manufacturer"]) || array_key_exists("manufacturer", $context) ? $context["manufacturer"] : (function () { throw new RuntimeError('Variable "manufacturer" does not exist.', 28, $this->source); })()), "listedDate", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["manufacturer"]) || array_key_exists("manufacturer", $context) ? $context["manufacturer"] : (function () { throw new RuntimeError('Variable "manufacturer" does not exist.', 28, $this->source); })()), "listedDate", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manufacturer_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manufacturer_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["manufacturer"]) || array_key_exists("manufacturer", $context) ? $context["manufacturer"] : (function () { throw new RuntimeError('Variable "manufacturer" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "manufacturer/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "manufacturer/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  122 => 35,  117 => 33,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Manufacturer{% endblock %}

{% block body %}
    <h1>Manufacturer</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ manufacturer.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ manufacturer.name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ manufacturer.description }}</td>
            </tr>
            <tr>
                <th>CountryCode</th>
                <td>{{ manufacturer.countryCode }}</td>
            </tr>
            <tr>
                <th>ListedDate</th>
                <td>{{ manufacturer.listedDate ? manufacturer.listedDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_manufacturer_index') }}\">back to list</a>

    <a href=\"{{ path('app_manufacturer_edit', {'id': manufacturer.id}) }}\">edit</a>

    {{ include('manufacturer/_delete_form.html.twig') }}
{% endblock %}
", "manufacturer/show.html.twig", "/home/blacksparrow/web/products-api/templates/manufacturer/show.html.twig");
    }
}
