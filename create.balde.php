<div>
    <form>

        {{ $this->form }}

        <div id="build-wrap" style="margin-top: 2rem"></div>


    </form>

    <x-filament-actions::modals />
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script>
    jQuery(function($) {
        var container = document.getElementById("build-wrap");
        var fields = [{
            label: "Email",
            type: "text",
            subtype: "email",
            icon: "✉"
        }];
        var options = {
            inputSets: [{
                    label: 'Address',
                    name: 'address', // optional - one will be generated from the label if name not supplied
                    showHeader: true, // optional - Use the label as the header for this set of inputs
                    icon: "&#x1F3E0",
                    fields: [{
                            type: 'select',
                            label: 'Region',
                            className: 'form-control',
                            values: [{
                                    label: 'Yangon',
                                    value: 'option-2',
                                    selected: false
                                },
                                {
                                    label: 'Mandalay',
                                    value: 'option-3',
                                    selected: false
                                }
                            ]
                        },
                        {
                            type: 'select',
                            label: 'Township',
                            className: 'form-control',
                            values: [{
                                    label: 'Hlaing',
                                    value: 'option-2',
                                    selected: false
                                },
                                {
                                    label: 'Alone',
                                    value: 'option-3',
                                    selected: false
                                }
                            ]
                        },
                        {
                            type: 'select',
                            label: 'Quarter',
                            className: 'form-control',
                            values: [{
                                    label: 'Ward 1',
                                    value: 'option-2',
                                    selected: false
                                },
                                {
                                    label: 'Ward 2',
                                    value: 'option-3',
                                    selected: false
                                }
                            ]
                        },
                    ]
                },
                {
                    label: 'User Agreement',
                    fields: [{
                            type: 'header',
                            subtype: 'h2',
                            label: 'Terms &amp; Conditions',
                            className: 'header'
                        },
                        {
                            type: 'paragraph',
                            label: 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.',
                        },
                        {
                            type: 'paragraph',
                            label: 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.',
                        },
                        {
                            type: 'checkbox',
                            label: 'Do you agree to the terms and conditions?',
                        }
                    ]
                }
            ]
        };
        // $(container).formBuilder({
        //     fields
        // });
        // $(container).formBuilder(options);

        var mergedOptions = {
            ...options,
            fields
        };
        $(container).formBuilder(mergedOptions);

    });
</script>