
 supervisorctl -c /etc/supervisor/supervisord.conf stop messenger-consume:*
 supervisord -c /etc/supervisor/supervisord.conf
 supervisorctl -c /etc/supervisor/supervisord.conf reread
 supervisorctl -c /etc/supervisor/supervisord.conf update
 supervisorctl -c /etc/supervisor/supervisord.conf start messenger-consume:*
