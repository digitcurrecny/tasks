<!-- #######  YAY, I AM THE SOURCE EDITOR! #########-->
<h1 style="color: #5e9ca0;"><span class="VIiyi" lang="en"><span class="JLqJ4b ChMk0b" data-language-for-alternatives="en" data-language-to-translate-into="fa" data-phrase-index="0" data-number-of-phrases="1"><span class="Q4iAWc">Docker Compose&nbsp; configuration to run Laravel</span></span></span>!</h1>
<h2 style="color: #2e6c80;"><span class="VIiyi" lang="en"><span class="JLqJ4b ChMk0b" data-language-for-alternatives="en" data-language-to-translate-into="fa" data-phrase-index="0" data-number-of-phrases="1"><span class="Q4iAWc">The container uses the following images</span></span></span>:</h2>
<h2 style="color: #2e6c80;">&nbsp;</h2>
<ol style="list-style: none; font-size: 14px; line-height: 32px; font-weight: bold;">
<li style="clear: both;">Nginx:stable-alpine</li>
<li>php:7.4-fpm-alpine</li>
<li>mysql:5.7.29</li>
<li>phpmyadmin</li>
<li style="clear: both;">postgres</li>
<li style="clear: both;">pgadmin</li>
<li style="clear: both;">Node</li>
<li style="clear: both;">Composser</li>
<li style="clear: both;">NPM</li>
</ol>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<h2 style="color: #2e6c80;"><span class="VIiyi" lang="en"><span class="JLqJ4b ChMk0b" data-language-for-alternatives="en" data-language-to-translate-into="fa" data-phrase-index="0" data-number-of-phrases="1"><span class="Q4iAWc">Commands and execution</span></span></span>:</h2>
<table class="editorDemoTable" style="height: 420px;">
<thead>
<tr style="height: 18px;">
<td style="height: 18px; width: 209.733px;"><span class="VIiyi" lang="en"><span class="JLqJ4b ChMk0b" data-language-for-alternatives="en" data-language-to-translate-into="fa" data-phrase-index="0" data-number-of-phrases="1"><span class="Q4iAWc">Create a container</span></span></span> :</td>
<td style="height: 18px; width: 0.0166667px;">&nbsp;</td>
<td style="height: 18px; width: 398.317px;"><strong>docker-compose up -d</strong></td>
</tr>
</thead>
<tbody>
<tr style="height: 36px;">
<td style="height: 36px; width: 209.733px;"><span class="VIiyi" lang="en"><span class="JLqJ4b ChMk0b" data-language-for-alternatives="en" data-language-to-translate-into="fa" data-phrase-index="0" data-number-of-phrases="1"><span class="Q4iAWc">Install Laravel</span></span></span></td>
<td style="height: 36px; width: 0.0166667px;">&nbsp;</td>
<td style="height: 36px; width: 398.317px;"><strong>docker-compose run --rm composer create-project laravel/laravel .</strong></td>
</tr>
<tr style="height: 44px;">
<td style="height: 44px; width: 209.733px;">Example for run Composer command</td>
<td style="height: 44px; width: 0.0166667px;">&nbsp;</td>
<td style="height: 44px; width: 398.317px;"><strong style="font-size: 17px; color: #2b2301;">docker-compose run --rm composer require laravel/ui</strong></td>
</tr>
<tr style="height: 36px;">
<td style="height: 36px; width: 209.733px;">Example for run NPM command</td>
<td style="height: 36px; width: 0.0166667px;">&nbsp;</td>
<td style="height: 36px; width: 398.317px;"><strong style="font-size: 17px; color: #2b2301;"><strong>docker-compose run --rm&nbsp; npm install</strong></strong></td>
</tr>
<tr style="height: 18px;">
<td style="height: 18px; width: 209.733px;">Example for run Artisan&nbsp; command</td>
<td style="height: 18px; width: 0.0166667px;">&nbsp;</td>
<td style="height: 18px; width: 398.317px;"><strong>docker-compose run --rm artisan migrate</strong></td>
</tr>
</tbody>
</table>
<p><strong>&nbsp;</strong></p>
<p><strong>Note , the settings in the Laravel .env file should be like this, as in the example below</strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>&nbsp;</strong></p>
