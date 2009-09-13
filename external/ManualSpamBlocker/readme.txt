=== Plugin Name ===
Contributors: Harvey Kane
Donate link: http://www.ragepank.com/donate/
Tags: comments, spam, referer
Requires at least: 2.8
Tested up to: 2.8
Stable tag: trunk

Closes comments for visitors that arrive via a "add url" or "post comment" search query, on the assumption that their comments will be rubbish anyway.

== Description ==

This plugin is designed for blog owners that get a lot of low-quality comments from outsourced link builders.

Typically these comments might look like one of these real-life examples:

*. "Thanks for these simple tips. We at COMPANY NAME appriciate your efforts."
*. "This is really informative, I truly thank you for providing the information here on this blog."
*. "As a part of ongoing campaign to increase the Link Popularity of my website....."
*. "SEO plays an important part to increase the page rank.This will help to increase the traffice in to your website and usability and accessibility of your site as well." (this comment was completely off-topic for the post)

You get the picture.

Most of the time these comments are completely worthless, but because they are entered by humans they are able to bypass CAPTCHAs and filtering algorithms because they don't contain hot words like 'WOW GOLD' or 'CASINO'.

This plugin is a simple way of reducing these kinds of human-entered posts that are borderline spam. It looks at the referer information to see where the user came from. The logic is that if someone found your site using the phrase 'web design +"post comment"', how useful is their comment likely to be? Do you think they are wanting to contribute to your blog, or just get an easy link?

If the user arrived at the site via a search engine using a query containing "post comment" or "add url" or "post link" or other variations, this plugin will tell a little white lie and pretend that comments are closed on the blog. They can still enjoy your content, but they won't be able to place a comment. If they are just there for the easy link, they will likely move on.

You have full control over what search queries are blocked, simply edit blacklist.txt with your own list.

This plugin doesn't pretent to be the final answer to controlling spam - it's simply another method of keeping a particular type of spammer at arm's length. Feedback and comments appreciated, www.ragepank.com/msb/


== Installation ==

1. Unzip `ManualSpamBlocker.zip` and upload the folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Edit `blacklist.txt` to customise the phrases that are blocked.
1. Test the script by Googling for "site:YOURDOMAIN.COM post comment". Assuming there are search results for this query, you should be able to navigate to your site and comments should now appear closed.

== Frequently Asked Questions ==

= What happens if legitimate users are blocked from entering comments? =

This is a possibility. Customize your blacklist.txt to block out only search queries that are obviously low quality.

= How reliable is this plugin? =

This is my first Wordpress plugin. If you run a busy blog with lots of comments, you might want to consider doing careful testing before deploying this. No guarantees.


== Changelog ==

= 0.1 =
* Create the plugin
