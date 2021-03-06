<?php
    class Simplemde extends Modules {
        public function admin_head() {
            $config = Config::current();

            if (!$config->enable_markdown)
                return;

            return "<!-- SimpleMDE -->\n".
                   '<link rel="stylesheet" href="'.$config->chyrp_url.'/modules/simplemde/simplemde.min.css" type="text/css" media="all">'."\n".
                   '<script src="'.$config->chyrp_url.'/modules/simplemde/simplemde.min.js" type="text/javascript" charset="UTF-8"></script>'."\n".
                   '<script type="text/javascript">'."\n".
                   '    $(function() {'."\n".
                   '        $("textarea[data-markdown]").each(function() {'."\n".
                   '            new SimpleMDE({ element: $(this)[0], forceSync: true });'."\n".
                   '        });'."\n".
                   '    });'."\n".
                   '</script>';
        }
    }
