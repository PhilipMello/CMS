# UPDATE OLD WORDPRESS URL TO NEW WORDPRESS URL

### MYSQL Query
```
UPDATE inf_options SET option_value = replace(option_value, 'https://old-url-site.com/', 'https://new-url-site.com/');
UPDATE inf_posts SET post_content = replace(post_content, 'https://old-url-site.com/', 'https://new-url-site.com/');
UPDATE inf_posts SET guid = replace(guid, 'https://old-url-site.com/', 'https://new-url-site.com');
```