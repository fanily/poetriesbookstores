=== EWWW Image Optimizer Cloud ===
Contributors: nosilver4u
Tags: images, image, attachments, attachment, optimize, optimization, lossless, photos, photo, picture, pictures, seo, compression, image editor, gmagick, cloud, wp-cli
Requires at least: 4.4
Tested up to: 4.6
Stable tag: 2.9.6
License: GPLv3

Reduce image sizes for images within WordPress including NextGEN, GRAND FlAGallery, FooGallery and more via paid cloud service.

== Description ==

EWWW Image Optimizer Cloud is a WordPress plugin that will automatically optimize your images as you upload them to your blog. It can optimize the images that you have already uploaded, convert your images automatically to the file format that will produce the smallest image size (make sure you read the WARNINGS), and optionally apply lossy reductions for PNG and JPG images.

By default, EWWW Image Optimizer Cloud uses lossless optimization techniques, so your image quality will be exactly the same before and after the optimization. The only thing that will change is your file size. The one small exception to this is GIF animations. While the optimization is technically lossless, you will not be able to properly edit the animation again without performing an --unoptimize operation with gifsicle. The gif2png and jpg2png conversions are also lossless but the png2jpg process is not lossless. The lossy optimization for JPG and PNG files uses sophisticated algorithms to minimize perceptual quality loss, which is vastly different than setting a static quality/compression level.

Images are optimized via cloud servers that utilize the latest tools available in lossless or lossy mode. Your images can optionally be converted to the most suitable file format.

EWWW Image Optimizer Cloud offloads all optimization to designated servers which will allow the plugin to work on any hosting platform. The lossy compression options use special algorithms to gain maximum compression with minimal loss of quality. Using the EWWW I.O. Cloud can also be desirable if you cannot, or do not want to use the exec() function on your server, or prefer to offload the cpu demands of optimization for any reason. This is an ideal setup for web developers who can install this plugin for their clients with no risk due to the potentially insecure exec() function.

**Why use EWWW Image Optimizer Cloud?**

1. **Your pages WILL load faster.** Smaller image sizes means faster page loads. Faster page loads means more revenue, and who doesn't want that?
1. **Faster backups.** Smaller image sizes also means faster backups.
1. **Less bandwidth usage.** Optimizing your images can save you hundreds of KB per image, which means significantly less bandwidth usage.
1. **Better Privacy.** The cloud servers do not store any images after optimization is complete, and you retain all rights to any images processed via the cloud service.
1. **Root access not needed** No binaries needed on your local server, so it works on any hosting platform.
1. **Optimize everything** With the wp_image_editor class extension, and the ability to specify your own folders for scanning, any image in Wordpress can be optimized.

If you want to optimize images on your own server without using the cloud, see the [EWWW Image Optimizer](http://wordpress.org/plugins/ewww-image-optimizer/).

= Bulk Optimize = 

There are two functions on the Bulk Optimize page. One is to optimize all images in the Media Library. The Scan and Optimize is for everything else. Officially supported galleries (GRAND FlaGallery, NextCellent, and NextGEN) have their own Bulk Optimize pages.  

= Skips Previously Optimized Images = 

All optimized images are stored in the database so that the plugin does not attempt to re-optimize them unless they are modified. On the Bulk Optimize page you can view a list of already optimized images. You may also remove individual images from the list, or use the Force optimize option to override the default behavior. The re-optimize links on the Media Library page also force the plugin to ignore the previous optimization status of images. 

= WP Image Editor = 

All images created by the built-in WP_Image_Editor class will be automatically optimized. Current implementations are GD, Imagick, and Gmagick. Images optimized via this class include Animated GIF Resize, BuddyPress Activity Plus (thumbs), Easy Watermark, Hammy, Imsanity, MediaPress, Meta Slider, MyArcadePlugin, OTF Regenerate Thumbnails, Regenerate Thumbnails, Simple Image Sizes, WP Retina 2x, WP RSS Aggregator and probably countless others. If you are not sure if a plugin uses WP_Image_Editor, post your question in the support forums.

= Optimize Everything Else =

Site admins can specify any folder within their wordpress folder to be optimized. The 'Scan and Optimize' option under Media->Bulk Optimize will optimize theme images, BuddyPress avatars, BuddyPress Activity Plus images, Meta Slider slides, WP Symposium images, GD bbPress attachments, Grand Media Galleries, and any user-specified folders. Additionally, this tool can run on an hourly basis via wp_cron to keep newly uploaded images optimized. Scheduled optimization should not be used for any plugin that uses the built-in Wordpress image functions.

= WebP Images =

Can generate WebP versions of your images, and enables you to serve even smaller images to supported browsers. Several methods are available for serving WebP images, including Apache-compatible rewrite rules and our Alternative WebP Rewriting option compatible with caches and CDNs. Also works with the WebP option in the Cache Enabler plugin from KeyCDN.

= WP-CLI =

Allows you to run all Bulk Optimization processes from your command line, instead of the web interface. It is much faster, and allows you to do things like run it in 'screen' or via regular cron (instead of wp-cron, which can be unpredictable on low-traffic sites). Install WP-CLI from wp-cli.org, and run 'wp-cli.phar help ewwwio optimize' for more information. 

= FooGallery =

All images uploaded and cached by FooGallery are automatically optimized. Previous uploads can be optimized by running the Media Library Bulk Optimize. Previously cached images can be optimized by entering the wp-content/uploads/cache/ folder under Folders to Optimize and running a Scan & Optimize from the Bulk Optimize page.

= NextGEN Gallery =

Features optimization on upload capability, re-optimization, and bulk optimizing. The NextGEN Bulk Optimize function is located near the bottom of the NextGEN menu, and will optimize all images in all galleries. It is also possible to optimize groups of images in a gallery, or multiple galleries at once.

= NextCellent Gallery =

Features all the same capability as NextGEN, and is the continuation of legacy (1.9.x) NextGEN support.

= GRAND Flash Album Gallery =

Features optimization on upload capability, re-optimization, and bulk optimizing. The Bulk Optimize function is located near the bottom of the FlAGallery menu, and will optimize all images in all galleries. It is also possible to optimize groups of images in a gallery, or multiple galleries at once.

= Image Store =

Uploads are automatically optimized. Look for Optimize under the Image Store (Galleries) menu to see status of optimization and for re-optimization and bulk-optimization options. Using the Bulk Optimization tool under Media Library automatically includes all Image Store uploads.

= CDN Support =

Uploads to Amazon S3, Azure Storage, Cloudinary, and Dreamspeed CDN are optimized. All pull mode CDNs like Cloudflare, KeyCDN, MaxCDN, and Sucuri CloudProxy are also supported.

= Translations =

Huge thanks to all our translators! If you would like to help translate this plugin (new or existing translations), you can do so here: https://translate.wordpress.org/projects/wp-plugins/ewww-image-optimizer-cloud To receive updates when new strings are available for translation, you can signup here: https://ewww.io/register/

== Installation ==

1. Upload the 'ewww-image-optimizer-cloud' plugin to your '/wp-content/plugins/' directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Purchase an API key via https://ewww.io/plans/.
1. Enter your API key on the plugin settings page and enable the image formats you want to optimize.
1. *Optional* Visit the settings page to enable/disable specific tools and turn on advanced optimization features.
1. Done!

EWWW IO - Cloud API Walkthrough
[youtube https://www.youtube.com/watch?v=U78FFkM582E]
EWWW IO - Converting Images
[youtube https://www.youtube.com/watch?v=xAGtdv3vrYg]
EWWW IO - WebP
[youtube https://www.youtube.com/watch?v=OeYJgTy3D94]
Using EWWW IO:
[youtube https://www.youtube.com/watch?v=uELM25v-qgU]

== Frequently Asked Questions ==

= Google Pagespeed says my images need compressing or resizing, but I already optimized all my images. What do I do? =

http://ewww.io/2014/12/05/pagespeed-says-my-images-need-more-work/

= Does the plugin replace existing images? =

Yes, but only if the optimized version is smaller. The plugin should NEVER create a larger image.

= Can I resize my images with this plugin? =

No, we leave that to other plugins like Imsanity.

= Can I lower the compression setting for JPGs to save more space? =

The lossy JPG optimization using TinyJPG and JPEGmini will determine the ideal quality setting and save even more space. You cannot manually set the quality with this plugin.

= The bulk optimizer doesn't seem to be working, what can I do? =

If it doesn't seem to work at all, check for javascript problems using the developer console in Firefox or Chrome. If it is not working just on some images, you may need to increase the setting max_execution_time in your php.ini file. There are also other timeouts with Apache, and possibly other limitations of your webhost. If you've tried everything else, the last thing to look for is large PNG files. In my tests on a shared hosting setup, "large" is anything over 300 KB. You can first try decreasing the PNG optimization level in the settings. If that doesn't work, perhaps you ought to convert that PNG to JPG or set a max PNG optimization size. Screenshots are often done as PNG files, but that is a poor choice for anything with photographic elements.

= I want to know more about image optimization. =

That's not really a question, but since I made it up, I'll answer it. See these resources:
http://developer.yahoo.com/performance/rules.html#opt_images  
https://developers.google.com/speed/docs/best-practices/payload#CompressImages  
https://developers.google.com/speed/docs/insights/OptimizeImages  

== Changelog ==

* If you would like to help translate this plugin in your language, get started here: https://translate.wordpress.org/projects/wp-plugins/ewww-image-optimizer-cloud/

= 2.9.6 =
* fixed: set_time_limit() was still being called in a couple spots even if set_time_limit() is disabled by PHP
* fixed: regression in scheduled optimization which allowed multiple processes to run
* fixed: total savings for multisite was incorrectly requerying site 1 for each blog
* fixed: optimization being attempted via API even if license exceeded
* added: ewwwio_images table is checked on settings page to make sure it exists
* added: run utf8_encode() on all filenames for Scheduled Optimize and Scan & Optimize to avoid database update issues, please report any new issues with Scan & Optimize right away

= 2.9.5 =
* fixed: wrong path pre-pended using parallel optimization and wp-content or uploads folder is not within the WP root
* fixed: absolute paths passed to async optimization are pre-pended with ABSPATH
* fixed: Bulk Optimize excluding images from count based on wrong option (disabled generation vs. disabled optimization)
* fixed: timeouts during Media optimize could corrupt metadata, added routine to rebuild the meta on re-optimization
* changed: running out of API credits puts the verification function to sleep for up to 5 minutes
* added: extra checks to make sure the Background/Async objects are properly initialized before using them

= 2.9.4 =
* fixed: permissions after optimization are different than what WP core uses and falls back to umask on unixy systems
* fixed: API server address not re-fetched properly when cache expires
* changed: Parallel Optimization no longer ON by default

= 2.9.3 =
* fixed: sorry, missed a session locking operation (manual optimize)

= 2.9.2 =
* changed: priority level of Alt WebP Rewriting so that pages do not get un-minified after Autoptimize runs
* fixed: async requests for parallel optimization had an empty user agent
* fixed: uploads broken because start_session() locks all async processes

= 2.9.1 =
* changed: full paths are not POSTed to avoid Local File Inclusion blocks put in place by various security plugins (Wordfence & Shield)
* fixed: reduced number of database queries during parallel optimization
* fixed: undefined methods for BFI thumb editor class
* added: detect Shield's Lock to Location feature and disable background/parallel operations

= 2.9.0 =
* added: parallel optimization for Media uploads (original and resizes are done concurrently), turn off under Advanced if it affects site performance
* added: allow resize dimensions to be filtered: https://ewww.io/2016/07/05/changing-the-dimensions-for-resizing-images/
* changed: deferred (background) optimization is now the normal mode of operation as it runs instantly, and no longer relies on wp_cron
* changed: scheduled optimization uses new background processing to allow it to run longer, and resume quicker
* changed: webp .htaccess rules removed when plugin is deleted
* changed: JPG quality setting applies to conversion AND image editing (but not regular optimization), so that you can override the WP default of 82
* changed: API license status check is faster, as results are cached while checking for updates in the background
* fixed: .htaccess rules for webp inserted properly for sub-directory installs
* fixed: .jpe files properly detected as image/jpeg when fetching from CDN or during folder-scanning operations
* fixed: images generated by NextGEN are properly optimized with latest version
* fixed: deprecated class constructors for NextGEN, Nextcellent, and FlaGallery classes (potential white screen with PHP 7)
* fixed: basic uploader for FlaGallery broken due to missing class
* fixed: images uploaded with WPML Media active are now resized, with better detection for newly uploaded images

= 2.8.3 =
* fixed: notice when checking nonce lifetime during scheduled optimization
* fixed: multi-site not saving cloud optimization levels
* fixed: settings page requiring a refresh to display properly after inserting/removing an API key

= 2.8.1 =
* added: kudos to Cache Enabler plugin from KeyCDN for adding WebP rewrite support to work with images generated by EWWW I.O.
* fixed: untranslatable string for resize setting description
* fixed: Resize Media Images was not applying to the Media->Add New menu item
* fixed: Bulk Optimize counted webp images as valid resizes

= 2.8.0 =
* added: resizing for uploaded images, set max width and height and optionally resize all existing images
* added: retina derivative for resized original is generated if original was at least twice the size of the max dimensions (WP Retina 2x Pro only)
* fixed: warnings for file_exists in Alt WebP function when open_basedir restriction is in effect
* removed: disable automatic optimization, use deferred optimization instead
* changed: consolidated various settings into optimization levels for each file format, and removed Cloud tab

== Upgrade Notice ==

= 2.8.1 =
* KeyCDN added support for WebP images generated by EWWW I.O. into the Cache Enabler plugin. If you are using Cache Enabler, you may wish to use their WebP option instead of Alt WebP Rewriting. Works very nicely with CDNs and is a nice simple caching plugin.

= 2.8.0 =
* added: resizing for uploaded images, set max width and height and optionally resize all existing images
* changed: settings have been revamped, please check to make sure your settings were migrated properly
* added: PDF optimization introduced (from 2.7 actually)

= 2.5.4 =
* changed: Remove metadata turned on by default, should not affect existing installations/upgrades

= 2.0.0 =
* You must upgrade to this version before uploading JPG images in Wordpress 4.0 to avoid serious quality loss in your resizes

= 1.8.2 = 
* All cloud users must apply this update to avoid service degradation

= 1.8.0 =
* Bulk Optimize page: Import to the custom ewwwio table is mandatory (one time) before running Bulk Optimize, and highly recommended for all users to prevent duplicate optimizations. Optimize More and Bulk Optimize are now on one page.

= 1.7.6 =
* metadata stripping now applies to PNG images, but only if using optipng 0.7.x, you may want to run a bulk optimize on all your PNG images to make sure you have the best possible optimization

== Contact and Credits ==

Written by [Shane Bishop](https://ewww.io). Based upon CW Image Optimizer, which was written by [Jacob Allred](http://www.jacoballred.com/) at [Corban Works, LLC](http://www.corbanworks.com/). CW Image Optimizer was based on WP Smush.it.  
[Hammer](http://thenounproject.com/noun/hammer/#icon-No1306) designed by [John Caserta](http://thenounproject.com/johncaserta) from The Noun Project.  
[Images](http://thenounproject.com/noun/images/#icon-No22772) designed by [Simon Henrotte](http://thenounproject.com/Gizmodesbois) from The Noun Project.
