(function() {
	tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
		editor.addButton( 'my_mce_button', {
			text: 'Shortcodes',
			icon: false,
			type: 'menubutton',
			menu: [

				{
                    text: 'Full Width Sections',
                    menu: [
                        {
                            text: 'Background Video Section',
                            onclick: function() {
                                editor.insertContent('[background_vid poster="" mp4="" padding="pad-100" overlay=""][/background_vid]');
                            }
                        },
                        {
                            text: 'Background Section Color',
                            onclick: function() {
                                editor.insertContent('[color_section bgcolor="" class=""][/color_section]');
                            }
                        },
                        {
                            text: 'Background Section Image',
                            onclick: function() {
                                editor.insertContent('[img_section bgimg="" class="" overlay=""][/img_section]');
                            }
                        },
                        {
                            text: 'Background Parallax Image',
                            onclick: function() {
                                editor.insertContent('[parallax_section bgimg="" class="" overlay=""][/parallax_section]');
                            }
                        }

                    ]
                },

                {
                    text: 'Modal',
                    onclick: function() {
                                editor.insertContent('[boot_modal button="Modal button" title="Modal Title" class="btn btn-primary" target="modal1" closeclass="btn btn-default" modalsize="modal-lg"][/boot_modal]');
                            }
                },
				
				{
                    text: 'Popup Video',
                    onclick: function() {
                                editor.insertContent('[popup_video class="" url=""][/popup_video]');
                            }
                },
                {
                    text: 'Recent Events',
                    onclick: function() {
                                editor.insertContent('[events-tribe-list cat="" number="2"]');
                            }
                },
                {
                    text: 'Taxonomy List',
                    menu: [
                        {
                            text: 'Alphabetical List',
                            onclick: function() {
                                editor.insertContent('[gtcc_taxonomy_list taxonomy="course_category" post-type="courses" title=""]');
                            }
                        },
                        {
                            text: 'Hierarchical List',
                            onclick: function() {
                                editor.insertContent('[ct_terms custom_taxonomy="course_category"]');
                            }
                        },
                    ]
                },
                {
                    text: 'Recent Posts',
                    menu: [
                        {
                            text: 'Recent Posts List',
                            onclick: function() {
                                editor.insertContent('[list_recent_posts category="" class="" ptype="" per_page="4"]');
                            }
                        },
                        {
                            text: 'Recent Posts Thumbnails',
                            onclick: function() {
                                editor.insertContent('[thumb_recent_posts column="col-md-4" class="" ptype="" per_page="4"]');
                            }
                        },
                        {
                            text: 'Recent Posts Carousel',
                            onclick: function() {
                                editor.insertContent('[carousel_recent_posts class="slick-1" category="" ptype="" per_page="8"]');
                            }
                        },
                        {
                            text: 'Related Posts Masonry',
                            onclick: function() {
                                editor.insertContent('[relatedposts ptype="" max="4" column="col-md-4" class="" orderby="rand" label="Related Posts"]');
                            }
                        },
                    ]
                },
                {
                    text: 'Recent Courses',
                    menu: [
                        {
                            text: 'Recent Courses List',
                            onclick: function() {
                                editor.insertContent('[list_recent_courses course_category="" posts="4" ptype="courses"]');
                            }
                        },
                        {
                            text: 'Data Tables Courses List',
                            onclick: function() {
                                editor.insertContent('[datatables_recent_courses course_category="" posts="-1" ptype="courses"]');
                            }
                        },
                    ]
                },
                {
                    text: 'Google Map',
                    onclick: function() {
                                editor.insertContent('[googlemap id="myMap1" height="" zoom="15" lat="35.905160" long="-79.046908" title="The University of North Carolina at Chapel Hill"]');
                            }
                },
                {
                    text: 'Custom Div',
                    onclick: function() {
                                editor.insertContent('[custom_div class=""][/custom_div]');
                            }
                },
                {
                    text: 'Carousel',
                    menu: [
                        {
                            text: 'Carousel Wrap',
                            onclick: function() {
                                editor.insertContent('[carousel_wrap class="slick-1"][/carousel_wrap]');
                            }
                        },
                        {
                            text: 'Carousel Item',
                            onclick: function() {
                                editor.insertContent('[carousel_item class=""][/carousel_item]');
                            }
                        },
                    ]
                },
                {
                    text: 'Login/Logout',
                    menu: [
                        {
                            text: 'Login View',
                            onclick: function() {
                                editor.insertContent('[boot_logged_in]This is what user sees when logged in[/boot_logged_in]');
                            }
                        },
                        {
                            text: 'Log Out View',
                            onclick: function() {
                                editor.insertContent('[boot_logged_out]This is what user sees when logged out[/boot_logged_out]');
                            }
                        },
                        {
                            text: 'Login Form',
                            onclick: function() {
                                editor.insertContent('[boot_login_form label_log_in="Login"]');
                            }
                        },
                        {
                            text: 'Log Out Link',
                            onclick: function() {
                                editor.insertContent('[boot_logoutbtn linktext="Log Out" class="btn btn-primary"]');
                            }
                        }
                    ]
                }
				
			]
		});
	});
})();