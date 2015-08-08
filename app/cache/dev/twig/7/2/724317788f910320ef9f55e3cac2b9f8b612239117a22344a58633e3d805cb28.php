<?php

/* base.html.twig */
class __TwigTemplate_724317788f910320ef9f55e3cac2b9f8b612239117a22344a58633e3d805cb28 extends Twig_Template
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
        $__internal_bb43b52cdedaab263624effd5021bb9ec80471ecc896b3639d3f2b6808064a62 = $this->env->getExtension("native_profiler");
        $__internal_bb43b52cdedaab263624effd5021bb9ec80471ecc896b3639d3f2b6808064a62->enter($__internal_bb43b52cdedaab263624effd5021bb9ec80471ecc896b3639d3f2b6808064a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bb43b52cdedaab263624effd5021bb9ec80471ecc896b3639d3f2b6808064a62->leave($__internal_bb43b52cdedaab263624effd5021bb9ec80471ecc896b3639d3f2b6808064a62_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c5c36b9fff16a439a983d91d1c822d8473f3a0e45a11cc43e47e1085a5570e7 = $this->env->getExtension("native_profiler");
        $__internal_4c5c36b9fff16a439a983d91d1c822d8473f3a0e45a11cc43e47e1085a5570e7->enter($__internal_4c5c36b9fff16a439a983d91d1c822d8473f3a0e45a11cc43e47e1085a5570e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4c5c36b9fff16a439a983d91d1c822d8473f3a0e45a11cc43e47e1085a5570e7->leave($__internal_4c5c36b9fff16a439a983d91d1c822d8473f3a0e45a11cc43e47e1085a5570e7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bcd7973ec572525a77042fe8d7779d8c708c35dbe04aba16c5a42fb9a5705f48 = $this->env->getExtension("native_profiler");
        $__internal_bcd7973ec572525a77042fe8d7779d8c708c35dbe04aba16c5a42fb9a5705f48->enter($__internal_bcd7973ec572525a77042fe8d7779d8c708c35dbe04aba16c5a42fb9a5705f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bcd7973ec572525a77042fe8d7779d8c708c35dbe04aba16c5a42fb9a5705f48->leave($__internal_bcd7973ec572525a77042fe8d7779d8c708c35dbe04aba16c5a42fb9a5705f48_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cfadd70c8c22825b82ec681c5086a5d1ec6217a619310c21a464a0fd465f5a2 = $this->env->getExtension("native_profiler");
        $__internal_0cfadd70c8c22825b82ec681c5086a5d1ec6217a619310c21a464a0fd465f5a2->enter($__internal_0cfadd70c8c22825b82ec681c5086a5d1ec6217a619310c21a464a0fd465f5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0cfadd70c8c22825b82ec681c5086a5d1ec6217a619310c21a464a0fd465f5a2->leave($__internal_0cfadd70c8c22825b82ec681c5086a5d1ec6217a619310c21a464a0fd465f5a2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b74f94bd346252ca72d916e063040416855436a87231cb1432a004de226d75a7 = $this->env->getExtension("native_profiler");
        $__internal_b74f94bd346252ca72d916e063040416855436a87231cb1432a004de226d75a7->enter($__internal_b74f94bd346252ca72d916e063040416855436a87231cb1432a004de226d75a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b74f94bd346252ca72d916e063040416855436a87231cb1432a004de226d75a7->leave($__internal_b74f94bd346252ca72d916e063040416855436a87231cb1432a004de226d75a7_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
