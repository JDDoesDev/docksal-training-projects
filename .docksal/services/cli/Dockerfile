FROM docksal/cli:2.9-php7.3

USER docker

# Install additional global npm dependencies
RUN set -e; \
  # Initialize the user environment (this loads nvm)
  . $HOME/.profile; \
  # Install the necessary nodejs version
  nvm install 8.11.0; \
  nvm alias default 8.11.0; \
  nvm use default; \
  nvm uninstall 10.16.3; \
  # Install packages
  npm install -g npm@6.1.0; \
  # Cleanup
  nvm clear-cache && npm cache clear --force; \
  # Fix npm complaining about permissions and not being able to update
  sudo rm -rf $HOME/.config

USER root
