/**
 * Javascript for the yourgroups plugin
 */
define(function(require)
{
    var $ = require('jquery');
    var elgg = require('elgg');

    /**
     * Fetch notifications and display them in the popup module.
     *
     * @param {Object} e
     * @return void
     */
    $('#groups-popup-link').on('click', null, function(e)
    {
        $('#groups-popup > .elgg-body').html('<li><div class="elgg-ajax-loader mtm mbm"></div></li>');
        elgg.get('yourgroups/popup',
        {
            success: function(output)
            {
                if (output)
                {
                    // refresh the list
                    $('#groups-popup > .elgg-body').html(output);
                    var t_options = new Array();
                    t_options[0] = $(output).find('li').length;
                    // refresh the tooltip
                    $('#groups-popup-link').attr('title',elgg.echo('yourgroups:tooltip', t_options));
                }
            }
        });
    });
});
