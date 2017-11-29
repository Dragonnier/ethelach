<?php

/* index_body.html */
class __TwigTemplate_77edd74ba9917be2f5a121dd90528ddafb0402240d991d9ca1a3df296cd59fb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forumrow"]) ? $context["forumrow"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
            // line 4
            echo "\t";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 5
                echo "\t\t<section class=\"index__cate index__cate--first\">
\t";
            }
            // line 7
            echo "
\t";
            // line 8
            if ( !$this->getAttribute($context["forum"], "S_IS_CAT", array())) {
                // line 9
                echo "\t\t<section class=\"index__forum index__forum--";
                echo $this->getAttribute($context["loop"], "index0", array());
                echo "\">
\t\t\t<div class=\"index__forum__bg index__forum__bg--active\"></div>
\t\t\t<button class=\"index__forum__btn\" type=\"button\">";
                // line 11
                echo $this->getAttribute($context["forum"], "FORUM_NAME", array());
                echo "</button>
\t\t\t<div class=\"index__forum__ctn\">
\t\t\t\t<div class=\"index__forum__content\">
\t\t\t\t\t<a href=\"";
                // line 14
                echo $this->getAttribute($context["forum"], "U_VIEWFORUM", array());
                echo "\" class=\"index__forum__title\">";
                echo $this->getAttribute($context["forum"], "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t<div class=\"index__forum__description\">
\t\t\t\t\t\t";
                // line 16
                echo $this->getAttribute($context["forum"], "FORUM_DESC", array());
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"index__forum__subforums\">
\t\t\t\t\t\t";
                // line 19
                if ($this->getAttribute($context["forum"], "S_LIST_SUBFORUMS", array())) {
                    // line 20
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forum"], "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                        // line 21
                        echo "\t\t\t\t\t\t\t\t<li class=\"index__forum__subforum\"><a href=\"";
                        echo $this->getAttribute($context["sub"], "U_SUBFORUM", array());
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["sub"], "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["sub"], "S_UNREAD", array())) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-subforum\" aria-hidden=\"true\"></i>";
                        // line 22
                        echo $this->getAttribute($context["sub"], "SUBFORUM_NAME", array());
                        echo "</a></li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t";
            }
            // line 30
            echo "
\t";
            // line 31
            if ($this->getAttribute($context["forum"], "S_LAST_ROW", array())) {
                // line 32
                echo "\t\t</section>
\t";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
";
        // line 36
        // line 37
        echo "
";
        // line 38
        // line 39
        echo "
<div id=\"qeel\">
";
        // line 41
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 42
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 43
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                echo "<h3><a href=\"";
                echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 44
            echo "\t\t<p>
\t\t\t";
            // line 45
            // line 46
            echo "\t\t\t";
            echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
            echo " (";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo (isset($context["RECORD_USERS"]) ? $context["RECORD_USERS"] : null);
            echo "<br /> 
\t\t\t";
            // line 47
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                // line 48
                echo "\t\t\t\t<br />";
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
                echo "
\t\t\t\t";
                // line 49
                if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
                    echo "<br /><em>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LEGEND");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
                    echo "</em>";
                }
                // line 50
                echo "\t\t\t";
            }
            // line 51
            echo "\t\t\t";
            // line 52
            echo "\t\t</p>
\t</div>
";
        }
        // line 55
        echo "
";
        // line 56
        // line 57
        echo "
";
        // line 58
        if ((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null)) {
            // line 59
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 60
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 62
            // line 63
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                    if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", array());
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_BIRTHDAYS");
            }
            // line 64
            echo "\t\t\t";
            // line 65
            echo "\t\t</p>
\t</div>
";
        }
        // line 68
        echo "
";
        // line 69
        if ((isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null)) {
            // line 70
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 71
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 73
            // line 74
            echo "\t\t\t";
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo " &bull; ";
            echo (isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null);
            echo "
\t\t\t";
            // line 75
            // line 76
            echo "\t\t</p>
\t</div>
";
        }
        // line 79
        echo "</div>

";
        // line 81
        // line 82
        echo "
";
        // line 83
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 83)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 83,  306 => 82,  305 => 81,  301 => 79,  296 => 76,  295 => 75,  284 => 74,  283 => 73,  278 => 71,  275 => 70,  273 => 69,  270 => 68,  265 => 65,  263 => 64,  237 => 63,  236 => 62,  231 => 60,  228 => 59,  226 => 58,  223 => 57,  222 => 56,  219 => 55,  214 => 52,  212 => 51,  209 => 50,  200 => 49,  195 => 48,  193 => 47,  184 => 46,  183 => 45,  180 => 44,  168 => 43,  165 => 42,  163 => 41,  159 => 39,  158 => 38,  155 => 37,  154 => 36,  151 => 35,  135 => 32,  133 => 31,  130 => 30,  123 => 25,  120 => 24,  112 => 22,  95 => 21,  90 => 20,  88 => 19,  82 => 16,  75 => 14,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  54 => 5,  51 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index_body.html", "");
    }
}
