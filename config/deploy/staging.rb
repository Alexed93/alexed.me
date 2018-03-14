################################################################################
## Setup Environment
################################################################################

# The Git branch this environment should be attached to.
set :branch, 'development'

# The environment's name. To be used in commands and other references.
set :stage, :staging

# The URL of the website in this environment.
set :stage_url, 'http://staging.alexed.me'

# The environment's server credentials
server 'elm-01.mixd.co.uk', user: 'mixdremote', roles: %w(web app db)

# The deploy path to the website on this environment's server.
set :deploy_to, '/var/www/vhosts/staging.alexed.me/httpdocs'
