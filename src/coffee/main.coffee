jQuery ($) ->

    if typeof Prism isnt 'undefined'

        # ----------------------------------------------------------------------------------------------------
        # 
        # Bind 'post-load' event (from Jetpack infinityScroll) to apply Prism magic on code blocks
        # 
        $('body').on 'post-load', ->
            # We only apply Prism on the last n posts, to save resource
            $('.post')
                .slice(0 - window.infiniteScroll.settings.query_args.posts_per_page).find('code[class^=lang]')
                .each ->
                    Prism.highlightElement @