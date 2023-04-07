cmake --build ./build --parallel
sudo ninja -C ./build install
sudo /usr/local/lib/fossology/fo-postinstall
systemctl reload apache2
