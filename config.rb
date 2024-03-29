# Require any additional compass plugins here.
require 'susy'
require 'animation'
require "rgbapng"

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "assets/css"
sass_dir = "assets/sass"
add_import_path "assets/modules"
add_import_path "assets/navigation"
images_dir = "assets/img"
javascripts_dir = "assets/js"

relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false

disable_warnings = true

output_style = (environment == :production) ? :compressed : :expanded
#asset_cache_buster :none

# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
