################################################################################
## Setup Environment
################################################################################

# The Git branch this environment should be attached to.
set :branch, 'master'

# The environment's name. To be used in commands and other references.
set :stage, :production

# The URL of the website in this environment.
set :stage_url, 'http://alexed.me'

# The environment's server credentials
server 'beech-01.mixd.co.uk', user: 'mixdremote', roles: %w(web app db)

# The deploy path to the website on this environment's server.
set :deploy_to, '/var/www/vhosts/alexed.me/httpdocs'
