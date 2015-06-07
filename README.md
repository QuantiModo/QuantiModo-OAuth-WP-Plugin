# QuantiModo-WordPress-Plugin

Help ignite a revolution of citizen science to find new solutions to chronic illnesses.  Install the Quantimodo Wordpress plugin!

This is a mobile-friendly WordPress plugin that enables users of any WordPress to authenticate and share their data from QuantiModo.com. It also allows you to embed dynamic graphs containing your users' Quantified Self data agggregated at QuantiModo.com. These graphs may be included in any page or post using shortcode.

Note: Javascript is required for this plugin's functionality.

## Add QuantiModo Connect Button
1. Download and install the QuantiModo-WordPress-Plugin.
2. Email api@quantimo.do to get an API client id and secret.
3. Setup your QM API key/secret in the WordPress backend under Settings > QM-OAuth.
4. Add the QM Login button anywhere to your site with the [qmoa_login_form] shortcode.

Once a user authorizes you to access their measurements, their OAuth access tokens will be stored and refreshed automatically. They will be able to continue to access their data through your site until they revoke access. 

For example:

[qmoa_login_form layout="buttons-column" align="left"]

*Possible shortcode attributes:*

layout - determines whether to display the login buttons as links or buttons, stacked vertically or lined up horizontally. Possible values: links-row, links-column, buttons-row, buttons-column
align - sets the horizontal alignment of the custom form elements. Possible values: left, middle, right
show_login - determines when the login buttons will be shown. Possible values: never, conditional, always
show_logout - determines when the logout button will be shown. Possible values: never, conditional, always
logged_out_title - sets the text to display above the custom login form when the user is logged out. Possible values: any text
logged_in_title - sets the text to display above the custom login form when the user is logged in. Possible values: any text
logging_in_title - sets the text to display above the custom login form when the user is logging ing. Possible values: any text
logging_out_title - sets the text to display above the custom login form when the user is logging out. Possible values: any text
style - sets the custom css style to apply to the custom login form. Possible values: any text
class - sets the custom css class to apply to the custom login form. Possible values: any text

## Timeline Graph
Shortcode - [qm_timeline]
Demo: https://quantimo.do/analyze

## Correlation Charts
Shortcode - [qm_correlations]
Demo: https://quantimo.do/correlate

*Possible shortcode attributes for correlation charts:*

examined_variable - Sets the default examined variable. Possible values: any variable name
secondary_variable - Sets the default secondary variable to be selected on the bar graph. Possible values: any variable name
examined_is_cause - Sets the examined variable to be considered the cause in the relationship.  Possible values: true or false. Default: false

## Connectors to Data Sources
Shortcode - [qm_connectors]
Demo: https://quantimo.do/connect

## Add a Measurement Button
Shortcode - [qm_add_measurement]
Demo: Go to https://quantimo.do/correlate and press the + button or try https://chrome.google.com/webstore/detail/quantimodo-universal-trac/jioloifallegdkgjklafkkbniianjbgi?hl=en-US

## Correlation Search Box
Shortcode - [qm_correlation_search]
Demo: https://quantimo.do/qm-search

*Possible shortcode attributes for correlation search:*
searched-cause-variable - Instead of a search box, only a list of the effects of this variable are displayed
searched-effect-variable - Instead of a search box, only a list of the causes of this variable are displayed

## Mood Tracker
Shortcode - [qm_track_mood]
Demo: https://chrome.google.com/webstore/detail/moodimodo-beta/lncgjbhijecjdbdgeigfodmiimpmlelg?hl=en-US

Shortcode can be added to a post through "Add Media" by installing [ShortCake](https://github.com/fusioneng/Shortcake).

Our API documentation can be found at https://quantimo.do/api/docs/index.html