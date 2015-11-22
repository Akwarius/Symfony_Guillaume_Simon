<?php

/* base.html.twig */
class __TwigTemplate_dd43421daa6e14150961dbf216685eaa46992c6b905b9fadebf03c39870db7af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dc42ba17a3ddd4885d0d82cfb5c3f7cad2fbde424b41feb3ea0047518a8ef12 = $this->env->getExtension("native_profiler");
        $__internal_3dc42ba17a3ddd4885d0d82cfb5c3f7cad2fbde424b41feb3ea0047518a8ef12->enter($__internal_3dc42ba17a3ddd4885d0d82cfb5c3f7cad2fbde424b41feb3ea0047518a8ef12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_3dc42ba17a3ddd4885d0d82cfb5c3f7cad2fbde424b41feb3ea0047518a8ef12->leave($__internal_3dc42ba17a3ddd4885d0d82cfb5c3f7cad2fbde424b41feb3ea0047518a8ef12_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fbd88f9160c63edbc14a3f6079dd32b9e1ab92cc1be332796ca17134442e236 = $this->env->getExtension("native_profiler");
        $__internal_3fbd88f9160c63edbc14a3f6079dd32b9e1ab92cc1be332796ca17134442e236->enter($__internal_3fbd88f9160c63edbc14a3f6079dd32b9e1ab92cc1be332796ca17134442e236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3fbd88f9160c63edbc14a3f6079dd32b9e1ab92cc1be332796ca17134442e236->leave($__internal_3fbd88f9160c63edbc14a3f6079dd32b9e1ab92cc1be332796ca17134442e236_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bb815a08358fcf090e3f2faeccf5c79d21f958cdb479e10cb32ec24d3832c448 = $this->env->getExtension("native_profiler");
        $__internal_bb815a08358fcf090e3f2faeccf5c79d21f958cdb479e10cb32ec24d3832c448->enter($__internal_bb815a08358fcf090e3f2faeccf5c79d21f958cdb479e10cb32ec24d3832c448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dc4742d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc4742d_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dc4742d_part_1.css");
            // line 8
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
        } else {
            // asset "dc4742d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dc4742d") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/dc4742d.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        ";
        
        $__internal_bb815a08358fcf090e3f2faeccf5c79d21f958cdb479e10cb32ec24d3832c448->leave($__internal_bb815a08358fcf090e3f2faeccf5c79d21f958cdb479e10cb32ec24d3832c448_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b9221bcfcf652284ec595670e134384ac564487814d039a808ca8999bb54d57 = $this->env->getExtension("native_profiler");
        $__internal_8b9221bcfcf652284ec595670e134384ac564487814d039a808ca8999bb54d57->enter($__internal_8b9221bcfcf652284ec595670e134384ac564487814d039a808ca8999bb54d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b9221bcfcf652284ec595670e134384ac564487814d039a808ca8999bb54d57->leave($__internal_8b9221bcfcf652284ec595670e134384ac564487814d039a808ca8999bb54d57_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c55e0eb1cff6cfcef326d529cd8f3f92194c6b5f23cfc375cf37b7a15467790e = $this->env->getExtension("native_profiler");
        $__internal_c55e0eb1cff6cfcef326d529cd8f3f92194c6b5f23cfc375cf37b7a15467790e->enter($__internal_c55e0eb1cff6cfcef326d529cd8f3f92194c6b5f23cfc375cf37b7a15467790e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4d1d496_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d1d496_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4d1d496_part_1.js");
            // line 17
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "4d1d496"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4d1d496") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/4d1d496.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "        ";
        
        $__internal_c55e0eb1cff6cfcef326d529cd8f3f92194c6b5f23cfc375cf37b7a15467790e->leave($__internal_c55e0eb1cff6cfcef326d529cd8f3f92194c6b5f23cfc375cf37b7a15467790e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 19,  125 => 17,  120 => 16,  114 => 15,  103 => 14,  96 => 10,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 15,  45 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             {% stylesheets '@adminlte_css' %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}"/>*/
/*             {% endstylesheets %}*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             {% javascripts '@adminlte_js' %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
