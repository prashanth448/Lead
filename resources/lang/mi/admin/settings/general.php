<?php

return [
    'ad'				        => 'Whaiaronga Active',
    'ad_domain'				    => 'Rohe Whaiaronga Active',
    'ad_domain_help'			=> 'He waahi tenei i te wa i to rohe rohe īmēra, engari ehara i nga wa katoa.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".',
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'If you would like to send a copy of checkin/checkout emails that are sent to users to an additional email account, enter it here. Otherwise leave this field blank.',
    'is_ad'				        => 'He raupapa Active Directory tēnei',
    'alerts'                	=> 'Alerts',
    'alert_title'               => 'Update Alert Settings',
    'alert_email'				=> 'Tukuna nga whakamohi ki',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'Kua Whakahohea nga Aler',
    'alert_interval'			=> 'Nga Mahinga Whakamutunga Nga Tae (i nga ra)',
    'alert_inv_threshold'		=> 'Waehere Awhearanga Inventory',
    'allow_user_skin'           => 'Allow User Skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.',
    'asset_ids'					=> 'Ngā ID tahua',
    'audit_interval'            => 'Whirihoranga Arotake',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date.',
    'audit_warning_days'        => 'Poari Whakatupato Aitea',
    'audit_warning_days_help'   => 'E hia nga ra i mua i te wa e tika ana kia whakatupato koe ki a koe i te wa e tika ana nga moni mo te tirotiro?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Taapiri (kōwhiringa)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Ngā Pūrua',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Tautuhinga Karauna',
    'confirm_purge'			    => 'Whakaatu Whakataunga',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'CSS Ritenga',
    'custom_css_help'			=> 'Whakauruhia tetahi tahua CSS ritenga e hiahia ana koe ki te whakamahi. Kaua e whakauru i nga tūtohu &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
    'default_currency'  		=> 'Moni Moni',
    'default_eula_text'			=> 'EULA Taunoa',
    'default_language'			=> 'Reo Taunoa',
    'default_eula_help_text'	=> 'Ka taea hoki e koe te hono atu i nga Taekerangi ritenga ki nga waahanga tahua.',
    'display_asset_name'        => 'Whakaatuhia te Ingoa Tahua',
    'display_checkout_date'     => 'Whakaatuhia te Whakataunga Rā',
    'display_eol'               => 'Whakaatuhia EOL i te tirohanga ripanga',
    'display_qr'                => 'Whakaatuhia nga Waehere Tae',
    'display_alt_barcode'		=> 'Whakaatuhia te tapanga 1D',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '2D Type Barcode',
    'alt_barcode_type'			=> '1D momo tapanga',
    'email_logo_size'       => 'Square logos in email look best. ',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> 'Tautuhinga EULA',
    'eula_markdown'				=> 'Ka taea e tenei EULA te <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Additional Footer Text ',
    'footer_text_help'          => 'This text will appear in the right-side footer. Links are allowed using <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Line breaks, headers, images, etc may result in unpredictable results.',
    'general_settings'			=> 'Tautuhinga Whānui',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula,  tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Whakaritea te Whakaora',
    'header_color'              => 'Tae pane',
    'info'                      => 'Ko enei tautuhinga ka tautuhi koe i etahi waahanga o to tautuhinga.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Laravel Version',
    'ldap'                      => 'LDAP',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'I whakahohea te LDAP',
    'ldap_integration'          => 'Te whakauru i te LDAP',
    'ldap_settings'             => 'Tautuhinga LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
     'ldap_client_tls_key'       => 'LDAP Client-Side TLS key',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'Tūmau LDAP',
    'ldap_server_help'          => 'Me tīmata tenei ki te ldap: // (mo te whakakoretanga, TLS ranei), mo te hiri: // (mo te SSL)',
    'ldap_server_cert'			=> 'Tiwhikete Tiwhikete SSL LDAP',
    'ldap_server_cert_ignore'	=> 'Tukua te Tiwhikete SSL muhu',
    'ldap_server_cert_help'		=> 'Tīpakohia tenei pouakataki mēnā kei te whakamahi koe i te cert SSL kua hainatia e koe, me te hiahia ki te whakaae i tetahi tiwhikete SSL muhu.',
    'ldap_tls'                  => 'Whakamahia te TLS',
    'ldap_tls_help'             => 'Me taki anake tenei mehemea e rere ana koe i te STARTTLS i runga i to ratonga LDAP.',
    'ldap_uname'                => 'Whakauruhia te Ingoa Kaiwhakamahi LDAP',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP Whakauru Kupuhipa',
    'ldap_basedn'               => 'Tae Tae Tae',
    'ldap_filter'               => 'Tātari LDAP',
    'ldap_pw_sync'              => 'Tukutahi Kupuhipa LDAP',
    'ldap_pw_sync_help'         => 'Tangohia tenei pouaka ki te kore koe e hiahia ki te pupuri i nga kupuhipa a LDAP e tukuna ana ki nga kupuhipa a rohe. Ko te whakakore i tenei ka kore e taea e to kaiwhakamahi te takiuru mēnā kaore e taea te hoko atu i tō tūmau LDAP mō ētahi take.',
    'ldap_username_field'       => 'Ingoa Ingoa Kaiwhakamahi',
    'ldap_lname_field'          => 'Ingoa Whakamutunga',
    'ldap_fname_field'          => 'Ingoa Tuatahi LDAP',
    'ldap_auth_filter_query'    => 'Rapu Whakamotuhēhēnga LDAP',
    'ldap_version'              => 'Putanga LDAP',
    'ldap_active_flag'          => 'LDAP Karaimana Mahi',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'Tau Taumahi LDAP',
    'ldap_email'                => 'LDAP Email',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Software License',
    'load_remote_text'          => 'Ngā Hōtuhi Mamao',
    'load_remote_help_text'		=> 'Ka taea e tenei kohinga Snipe-IT te kawe i nga tuhinga mai i te ao o waho.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Success?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Whakauru Tuhipoka',
    'login_note_help'           => 'Ka whakauruhia etahi waahanga i runga i to mata takiuru, hei tauira hei awhina i nga tangata i kitea he mea ngaro, tahae ranei. Ka whakaaetia e tenei mara <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'login_remote_user_text'    => 'Remote User login options',
    'login_remote_user_enabled_text' => 'Enable Login with Remote User Header',
    'login_remote_user_enabled_help' => 'This option enables Authentication via the REMOTE_USER header according to the "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disable other authentication mechanisms',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will get redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Moko',
    'logo_print_assets'         => 'Use in Print',
    'logo_print_assets_help'    => 'Use branding on printable asset lists ',
    'full_multiple_companies_support_help_text' => 'Te whakaiti i nga kaiwhakamahi (tae atu ki nga kaiwhakahaere) kua tohaina ki nga kamupene ki nga taonga a to kamupene.',
    'full_multiple_companies_support_text' => 'Te Tautoko Kamupene Maha',
    'show_in_model_list'   => 'Show in Model Dropdowns',
    'optional'					=> 'kōwhiringa',
    'per_page'                  => 'Nga Hua Nga Whārangi',
    'php'                       => 'PHP Version',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Me whakauruhia te php-g ki te whakaatu i nga waehere QR, tirohia nga tohutohu whakauru.',
    'php_gd_warning'            => 'Kāore i te whakauruhia te taputapu Atahanga PHP me te monohanga GD.',
    'pwd_secure_complexity'     => 'Kuputuhi Kupuhipa',
    'pwd_secure_complexity_help' => 'Tīpakohia te tikanga o te whakaari rapanga kupuhipa e hiahia ana koe ki te whakapakari.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Kupuhipa iti kupuhipa',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'Aukati i nga kupuhipa noa',
    'pwd_secure_uncommon_help'  => 'Ka whakakore tenei i nga kaiwhakamahi i te whakamahi i nga kupuhipa noa mai i te top 10,000 o nga kupuhipa i korerotia i roto i nga takahanga.',
    'qr_help'                   => 'Whakahohehia nga waehere QR tuatahi ki te whakarite i tenei',
    'qr_text'                   => 'Kuputuhi Raraunga QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Default Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Tautuhi',
    'settings'                  => 'Tautuhinga',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Ingoa Pae',
    'slack'                     => 'Slack',
    'slack_title'               => 'Update Slack Settings',
    'slack_help'                => 'Slack settings',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Ngā Tautuhinga Hati',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Once you have saved your Slack information, a test button will appear.',
    'slack_test_help'           => 'Test whether your Slack integration is configured correctly. YOU MUST SAVE YOUR UPDATED SLACK SETTINGS FIRST.',
    'snipe_version'  			=> 'Whakaaetanga-IT putanga',
    'support_footer'            => 'Support Footer Links ',
    'support_footer_help'       => 'Specify who sees the links to the Snipe-IT Support info and Users Manual',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who sees the Snipe-IT version and build number.',
    'system'                    => 'Mōhiohio Pūnaha',
    'update'                    => 'Tautuhinga Whakahōu',
    'value'                     => 'Uara',
    'brand'                     => 'Waitohu',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Mō Ngā Tautuhinga',
    'about_settings_text'       => 'Ko enei tautuhinga ka tautuhi koe i etahi waahanga o to tautuhinga.',
    'labels_per_page'           => 'Tapanga mo ia whārangi',
    'label_dimensions'          => 'Nga waahanga tapanga (inihi)',
    'next_auto_tag_base'        => 'Te whakawhitinga aunoa-aunoa',
    'page_padding'              => 'Tapapa Whārangi (inga)',
    'privacy_policy_link'       => 'Link to Privacy Policy',
    'privacy_policy'            => 'Privacy Policy',
    'privacy_policy_link_help'  => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge'                     => 'Purea nga Tiwhikete Kua Mukua',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Tapapahia te whara o raro',
    'labels_display_sgutter'    => 'Ko te tautuhi whanui',
    'labels_fontsize'           => 'Te rahi o te momotuhi ingoa',
    'labels_pagewidth'          => 'Te whanui whanui whaimana',
    'labels_pageheight'         => 'Te papanga pepa',
    'label_gutters'        => 'Te mokowhiti tohu (inihi)',
    'page_dimensions'        => 'Nga waahanga Whārangi (inihi)',
    'label_fields'          => 'Tapahia nga mara e kitea ana',
    'inches'        => 'inihi',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Hononga ki a Snipe-IT i roto i nga Īmēra',
    'show_url_in_emails_help_text'      => 'Tangohia tenei pouaka ki te kore koe e hiahia ki te hono atu ki to tautuhinga Snipe-IT i roto i to tautuhinga īmēra. He pai ki te kore e uru mai te nuinga o nga kaiwhakamahi.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Teitei teitei o te karakōnui',
    'thumbnail_max_h_help'   => 'Teitei teitei i nga pika e whakaatuhia ana e nga mokowhiti i te tirohanga o te rarangi. Min 25, max 500.',
    'two_factor'        => 'E rua nga taunakitanga Factor',
    'two_factor_secret'        => 'Tikanga e rua-whaimana',
    'two_factor_enrollment'        => 'Te whakaurunga e rua',
    'two_factor_enabled_text'        => 'Whakahohehia te Mea Tuarua',
    'two_factor_reset'        => 'Tautuhi anō i te Tino Tuarua',
    'two_factor_reset_help'        => 'Ma tenei ka akiaki te kaiwhakamahi ki te whakauru i to raatau mahi ki a Google Authenticator. Ka taea e tenei te whai hua ki te ngaro, ki te tahaehia ranei to raanei.',
    'two_factor_reset_success'          => 'E rua tautuhinga pūrere e tautuhi ana',
    'two_factor_reset_error'          => 'I rahua nga tautuhinga tautuhi piti',
    'two_factor_enabled_warning'        => 'Ka taea e koe te whakauru i nga take e rua ki te kore e taea te mahi i tenei wa ka akiaki koe ki te whakauru ki te kaupapa a Google Auth. Ka taea e koe te whakauru i to raatau ki te kore tetahi e whakauruhia ana.',
    'two_factor_enabled_help'        => 'Ka huri tenei ki nga whakamotuhēhēnga e rua-mahinga me te whakamahi i te Authenticator Google.',
    'two_factor_optional'        => 'Te Whakarite (Ka taea e nga kaiwhakamahi te whakahohe, te mono ranei ki te whakaaetia)',
    'two_factor_required'        => 'E hiahiatia ana mo nga kaiwhakamahi katoa',
    'two_factor_disabled'        => 'Nga umanga',
    'two_factor_enter_code'	=> 'Tāuruhia te Waehere Tuarua-Wae',
    'two_factor_config_complete'	=> 'Tukuna Waehere',
    'two_factor_enabled_edit_not_allowed' => 'Kaore to kaiwhakahaere e tuku ki a koe kia whakatika i tenei tautuhinga.',
    'two_factor_enrollment_text'	=> "E rua nga tohu motuhake e hiahiatia ana, ahakoa kuaore i whakauruhia to whakaaro. Whakatūwherahia tō taupānga Authenticator Google me te matawai i te waehere QR i raro nei hei whakauru i tō pūrere. I te wa i whakauruhia e koe to whakaaro, uruhia te waehere i raro nei",
    'require_accept_signature'      => 'Me tono Waitohu',
    'require_accept_signature_help_text'      => 'Ma te whakahoahoa i tenei ahua ka hiahia nga kaiwhakamahi ki te waitohu i te waahi ki te whakaae i tetahi taonga.',
    'left'        => 'maui',
    'right'        => 'tika',
    'top'        => 'runga',
    'bottom'        => 'raro',
    'vertical'        => 'poutū',
    'horizontal'        => 'whakapae',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => 'Te roa o nga taputapu hua, tae atu ki te korerehu',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
    'oauth_title' => 'OAuth API Settings',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email alerts, audit settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Label sizes &amp; settings',
    'purge' => 'Purge',
    'purge_keywords' => 'permanently delete',
    'purge_help' => 'Purge Deleted Records',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Employee Number',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
];
