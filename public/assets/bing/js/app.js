$(function() {
    let tipsSvg = '<svg style="vertical-align: middle;margin-right: 5px" t="1602926160057" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2429" data-spm-anchor-id="a313x.7781069.0.i27" width="30" height="30"><path d="M320.512 850.944l-71.68-40.96 60.416-104.448 34.816-21.504h478.208V254.976H201.728v347.136h-81.92V214.016l40.96-40.96h702.464l40.96 40.96v510.976l-40.96 40.96H368.64z" fill="#ffffff" p-id="2430" data-spm-anchor-id="a313x.7781069.0.i25" class="selected"></path><path d="M481.28 431.104h61.44v61.44h-61.44zM284.672 431.104h61.44v61.44h-61.44zM677.888 431.104h61.44v61.44h-61.44z" fill="#ffffff" p-id="2431" data-spm-anchor-id="a313x.7781069.0.i23" class="selected"></path></svg>';
    let qrSvg = '<svg style="vertical-align: middle;margin-right: 5px" t="1602927606509" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4167" width="30" height="30"><path d="M146.432 336.896h-81.92V106.496l40.96-40.96h231.424v81.92H146.432zM336.896 958.464H105.472l-40.96-40.96V687.104h81.92v189.44h190.464zM956.416 336.896h-81.92V147.456H684.032v-81.92h231.424l40.96 40.96zM915.456 958.464H613.376v-81.92h261.12V659.456h81.92v258.048z" fill="#ffffff" p-id="4168" data-spm-anchor-id="a313x.7781069.0.i59" class="selected"></path><path d="M326.656 334.848h61.44v98.304h-61.44zM415.744 575.488h61.44v133.12h-61.44zM265.216 575.488h61.44v114.688h-61.44zM566.272 575.488h61.44v98.304h-61.44zM706.56 575.488h61.44v154.624h-61.44zM477.184 297.984h61.44v135.168h-61.44zM627.712 329.728h61.44v103.424h-61.44z" fill="#ffffff" p-id="4169" data-spm-anchor-id="a313x.7781069.0.i58" class="selected"></path><path d="M10.24 473.088h1003.52v61.44H10.24z" fill="#ffffff" p-id="4170" data-spm-anchor-id="a313x.7781069.0.i57" class="selected"></path></svg>';
    let alipaySvg = '<svg t="1602939269695" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1127" width="32" height="32"><path d="M902.095 652.871l-250.96-84.392s19.287-28.87 39.874-85.472c20.59-56.606 23.539-87.689 23.539-87.689l-162.454-1.339v-55.487l196.739-1.387v-39.227H552.055v-89.29h-96.358v89.294H272.133v39.227l183.564-1.304v59.513h-147.24v31.079h303.064s-3.337 25.223-14.955 56.606c-11.615 31.38-23.58 58.862-23.58 58.862s-142.3-49.804-217.285-49.804c-74.985 0-166.182 30.123-175.024 117.55-8.8 87.383 42.481 134.716 114.728 152.139 72.256 17.513 138.962-0.173 197.04-28.607 58.087-28.391 115.081-92.933 115.081-92.933l292.486 142.041c-11.932 69.3-72.067 119.914-142.387 119.844H266.37c-79.714 0.078-144.392-64.483-144.466-144.194V266.374c-0.074-79.72 64.493-144.399 144.205-144.47h491.519c79.714-0.073 144.396 64.49 144.466 144.203v386.764z m-365.76-48.895s-91.302 115.262-198.879 115.262c-107.623 0-130.218-54.767-130.218-94.155 0-39.34 22.373-82.144 113.943-88.333 91.519-6.18 215.2 67.226 215.2 67.226h-0.047z" fill="#02A9F1" p-id="1128" data-spm-anchor-id="a313x.7781069.0.i1" class="selected"></path></svg>';
    let weChatSvg = '<svg t="1602939526328" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1368" width="32" height="32"><path d="M395.846 603.585c-3.921 1.98-7.936 2.925-12.81 2.925-10.9 0-19.791-5.85-24.764-14.625l-2.006-3.864-78.106-167.913c-0.956-1.98-0.956-3.865-0.956-5.845 0-7.83 5.928-13.68 13.863-13.68 2.965 0 5.928 0.944 8.893 2.924l91.965 64.43c6.884 3.864 14.82 6.79 23.708 6.79 4.972 0 9.85-0.945 14.822-2.926L861.71 282.479c-77.149-89.804-204.684-148.384-349.135-148.384-235.371 0-427.242 157.158-427.242 351.294 0 105.368 57.361 201.017 147.323 265.447 6.88 4.905 11.852 13.68 11.852 22.45 0 2.925-0.957 5.85-2.006 8.775-6.881 26.318-18.831 69.334-18.831 71.223-0.958 2.92-2.013 6.79-2.013 10.75 0 7.83 5.929 13.68 13.865 13.68 2.963 0 5.928-0.944 7.935-2.925l92.922-53.674c6.885-3.87 14.82-6.794 22.756-6.794 3.916 0 8.889 0.944 12.81 1.98 43.496 12.644 91.012 19.53 139.48 19.53 235.372 0 427.24-157.158 427.24-351.294 0-58.58-17.78-114.143-48.467-163.003l-491.39 280.07-2.963 1.98z" fill="#09BB07" p-id="1369"></path></svg>';
    let qqSvg = '<svg t="1602939546187" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1561" width="32" height="32"><path d="M511.09761 957.257c-80.159 0-153.737-25.019-201.11-62.386-24.057 6.702-54.831 17.489-74.252 30.864-16.617 11.439-14.546 23.106-11.55 27.816 13.15 20.689 225.583 13.211 286.912 6.767v-3.061z" fill="#FAAD08" p-id="1562"></path><path d="M496.65061 957.257c80.157 0 153.737-25.019 201.11-62.386 24.057 6.702 54.83 17.489 74.253 30.864 16.616 11.439 14.543 23.106 11.55 27.816-13.15 20.689-225.584 13.211-286.914 6.767v-3.061z" fill="#FAAD08" p-id="1563"></path><path d="M497.12861 474.524c131.934-0.876 237.669-25.783 273.497-35.34 8.541-2.28 13.11-6.364 13.11-6.364 0.03-1.172 0.542-20.952 0.542-31.155C784.27761 229.833 701.12561 57.173 496.64061 57.162 292.15661 57.173 209.00061 229.832 209.00061 401.665c0 10.203 0.516 29.983 0.547 31.155 0 0 3.717 3.821 10.529 5.67 33.078 8.98 140.803 35.139 276.08 36.034h0.972z" fill="#000000" p-id="1564"></path><path d="M860.28261 619.782c-8.12-26.086-19.204-56.506-30.427-85.72 0 0-6.456-0.795-9.718 0.148-100.71 29.205-222.773 47.818-315.792 46.695h-0.962C410.88561 582.017 289.65061 563.617 189.27961 534.698 185.44461 533.595 177.87261 534.063 177.87261 534.063 166.64961 563.276 155.56661 593.696 147.44761 619.782 108.72961 744.168 121.27261 795.644 130.82461 796.798c20.496 2.474 79.78-93.637 79.78-93.637 0 97.66 88.324 247.617 290.576 248.996a718.01 718.01 0 0 1 5.367 0C708.80161 950.778 797.12261 800.822 797.12261 703.162c0 0 59.284 96.111 79.783 93.637 9.55-1.154 22.093-52.63-16.623-177.017" fill="#000000" p-id="1565"></path><path d="M434.38261 316.917c-27.9 1.24-51.745-30.106-53.24-69.956-1.518-39.877 19.858-73.207 47.764-74.454 27.875-1.224 51.703 30.109 53.218 69.974 1.527 39.877-19.853 73.2-47.742 74.436m206.67-69.956c-1.494 39.85-25.34 71.194-53.24 69.956-27.888-1.238-49.269-34.559-47.742-74.435 1.513-39.868 25.341-71.201 53.216-69.974 27.909 1.247 49.285 34.576 47.767 74.453" fill="#FFFFFF" p-id="1566"></path><path d="M683.94261 368.627c-7.323-17.609-81.062-37.227-172.353-37.227h-0.98c-91.29 0-165.031 19.618-172.352 37.227a6.244 6.244 0 0 0-0.535 2.505c0 1.269 0.393 2.414 1.006 3.386 6.168 9.765 88.054 58.018 171.882 58.018h0.98c83.827 0 165.71-48.25 171.881-58.016a6.352 6.352 0 0 0 1.002-3.395c0-0.897-0.2-1.736-0.531-2.498" fill="#FAAD08" p-id="1567"></path><path d="M467.63161 256.377c1.26 15.886-7.377 30-19.266 31.542-11.907 1.544-22.569-10.083-23.836-25.978-1.243-15.895 7.381-30.008 19.25-31.538 11.927-1.549 22.607 10.088 23.852 25.974m73.097 7.935c2.533-4.118 19.827-25.77 55.62-17.886 9.401 2.07 13.75 5.116 14.668 6.316 1.355 1.77 1.726 4.29 0.352 7.684-2.722 6.725-8.338 6.542-11.454 5.226-2.01-0.85-26.94-15.889-49.905 6.553-1.579 1.545-4.405 2.074-7.085 0.242-2.678-1.834-3.786-5.553-2.196-8.135" fill="#000000" p-id="1568"></path><path d="M504.33261 584.495h-0.967c-63.568 0.752-140.646-7.504-215.286-21.92-6.391 36.262-10.25 81.838-6.936 136.196 8.37 137.384 91.62 223.736 220.118 224.996H506.48461c128.498-1.26 211.748-87.612 220.12-224.996 3.314-54.362-0.547-99.938-6.94-136.203-74.654 14.423-151.745 22.684-215.332 21.927" fill="#FFFFFF" p-id="1569"></path><path d="M323.27461 577.016v137.468s64.957 12.705 130.031 3.91V591.59c-41.225-2.262-85.688-7.304-130.031-14.574" fill="#EB1C26" p-id="1570"></path><path d="M788.09761 432.536s-121.98 40.387-283.743 41.539h-0.962c-161.497-1.147-283.328-41.401-283.744-41.539l-40.854 106.952c102.186 32.31 228.837 53.135 324.598 51.926l0.96-0.002c95.768 1.216 222.4-19.61 324.6-51.924l-40.855-106.952z" fill="#EB1C26" p-id="1571"></path></svg>';
    let otherSvg = '<svg t="1624130822567" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="9818" width="30" height="30"><path d="M630.784 686.08c6.144 8.192 8.192 18.432 4.096 28.672s-12.288 16.384-22.528 18.432c-14.336 2.048-30.72 4.096-47.104 4.096-34.816 0-90.112-4.096-149.504-26.624-32.768-12.288-61.44-43.008-88.064-71.68-16.384-20.48-47.104-53.248-59.392-53.248 0 2.048 0 6.144 4.096 18.432 22.528 59.392 122.88 161.792 184.32 161.792h296.96v-61.44c-59.392-24.576-124.928-49.152-157.696-61.44 8.192 12.288 22.528 28.672 34.816 43.008zM512 0C229.376 0 0 229.376 0 512s229.376 512 512 512 512-229.376 512-512S794.624 0 512 0z m305.152 796.672c0 16.384-12.288 28.672-28.672 28.672H458.752v-2.048c-94.208 0-208.896-120.832-239.616-198.656-16.384-45.056-4.096-69.632 10.24-81.92 10.24-10.24 24.576-14.336 38.912-14.336 36.864 0 67.584 32.768 102.4 69.632 22.528 24.576 47.104 51.2 67.584 59.392 43.008 16.384 83.968 22.528 114.688 22.528-14.336-18.432-18.432-24.576-18.432-28.672-1.536-4.096-2.56-8.192-3.072-12.288-4.096 5.12-10.24 8.192-17.408 8.192-12.288 0-22.528-10.24-22.528-22.528v-45.056h-43.008c-12.288 0-22.528-10.24-22.528-22.528 0-12.288 10.24-22.528 22.528-22.528H491.52V512h-43.008c-12.288 0-22.528-10.24-22.528-22.528 0-12.288 10.24-22.528 22.528-22.528H481.28l-49.152-49.152c-8.192-8.192-8.192-22.528 0-30.72 8.192-8.192 22.528-8.192 30.72 0l49.152 49.152 51.2-49.152c8.192-8.192 22.528-8.192 30.72 0 8.192 10.24 8.192 22.528-2.048 30.72l-51.2 49.152h34.816c12.288 0 22.528 10.24 22.528 22.528 0 12.288-10.24 22.528-22.528 22.528H532.48v22.528h47.104c12.288 0 22.528 10.24 22.528 22.528s-10.24 22.528-22.528 22.528h-43.008v33.28c1.024-2.048 2.56-4.608 4.096-6.656 10.24-14.336 26.624-22.528 43.008-22.528h8.192c8.192 2.048 28.672 8.192 61.44 20.48 38.912-36.864 61.44-88.064 61.44-143.36 0-110.592-90.112-200.704-200.704-200.704S313.344 350.208 313.344 460.8c0 8.192 0 18.432 2.048 26.624s0 14.336-6.144 20.48c-4.096 6.144-12.288 10.24-18.432 10.24H286.72c-14.336 0-26.624-10.24-28.672-24.576-2.048-10.24-2.048-22.528-2.048-32.768 0-141.312 114.688-258.048 258.048-258.048 141.312 0 258.048 114.688 258.048 258.048 0 61.44-22.528 118.784-61.44 165.888 38.912 14.336 73.728 28.672 88.064 34.816 10.24 4.096 18.432 14.336 18.432 26.624v108.544z" fill="#22b6f2" p-id="9819"></path></svg>';
    let paypal = '<svg t="1603032405616" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="973" width="32" height="32"><path d="M241.534 764.95H188.01c-3.692 0-7.385 1.852-7.385 7.408l-22.149 138.886c0 1.852 1.846 3.704 3.692 3.704h25.842c3.692 0 7.38-1.852 7.38-7.408l7.384-38.888c0-3.705 3.692-7.41 7.384-7.41h18.458c35.066 0 57.216-18.516 62.754-51.848 1.846-14.813 0-25.927-7.384-35.184-9.227-5.556-22.15-9.26-42.452-9.26z m5.538 50c-1.846 20.367-18.456 20.367-33.221 20.367h-9.23l7.383-35.184c0-1.852 1.847-5.552 3.688-5.552h3.692c9.232 0 20.304 0 23.996 7.404 3.692 1.852 5.538 7.409 3.692 12.966z m158.73 0h-25.84c-1.846 0-3.692 1.848-3.692 3.7l-1.846 7.41-1.846-1.853c-7.381-9.256-18.458-11.109-31.376-11.109-29.53 0-53.524 22.219-57.216 53.701-1.846 14.813 0 29.628 9.23 40.74 9.226 9.257 20.303 12.962 33.222 12.962 12.918 0 25.84-3.705 35.067-14.814l-1.846 7.41c0 1.851 1.846 3.7 3.692 3.7h23.995c3.693 0 7.38-1.849 7.38-7.405l12.923-88.89c1.846-3.704 0-5.551-1.846-5.551z m-38.758 51.85c-1.847 14.812-14.765 24.074-29.534 24.074-7.38 0-12.918-1.852-18.457-7.408-3.692-3.706-3.692-11.11-3.692-18.519 1.846-14.813 14.77-24.074 29.533-24.074 7.385 0 12.919 1.853 18.457 7.41 3.693 5.556 7.385 11.108 3.693 18.516z m179.033-51.85h-25.84c-1.847 0-3.693 1.848-7.385 1.848l-35.068 53.706-14.764-51.853c0-1.853-3.692-3.7-7.385-3.7h-25.837c-1.846 0-3.692 1.847-3.692 3.7v1.852l29.529 85.184-25.837 38.889c-1.846 1.852 0 3.704 0 7.408h29.53c1.846 0 3.692-1.852 7.384-1.852l86.746-127.777c-3.692-1.852-5.535-5.557-7.38-7.404z" fill="#253B80" p-id="974"></path><path d="M632.823 764.95h-55.37c-3.692 0-7.38 1.852-7.38 7.408l-22.15 140.738c0 1.852 1.843 3.7 3.692 3.7h29.53c1.846 0 3.692-1.848 3.692-3.7l7.38-40.74c0-3.704 3.692-7.409 7.385-7.409h18.457c35.067 0 57.216-18.517 62.754-51.849 1.846-14.817 0-25.927-7.384-35.188-9.226-9.256-22.149-12.96-40.606-12.96z m7.384 50c-1.846 20.367-18.456 20.367-33.22 20.367h-9.23l7.383-35.184c0-1.852 1.847-3.704 3.693-3.704h3.687c9.23 0 20.303 0 23.995 7.408 3.692 0 3.692 5.557 3.692 11.114z m155.04 0h-25.842c-1.842 0-3.688 1.848-3.688 3.7l-1.846 7.41-1.846-1.853c-7.384-9.256-18.456-11.109-31.38-11.109-29.528 0-53.524 22.219-57.216 53.701-1.846 14.813 0 29.628 9.23 40.74 9.227 9.257 20.304 12.962 33.222 12.962 12.918 0 25.842-3.705 35.068-14.814l-1.846 7.41c0 1.851 1.846 3.7 3.692 3.7h23.994c3.692 0 7.386-1.849 7.386-7.405l12.918-88.89c3.692-3.704 3.692-5.551-1.846-5.551z m-35.068 51.85c-1.846 14.812-14.764 24.074-29.534 24.074-7.38 0-12.918-1.852-18.456-7.408-3.688-3.706-3.688-11.11-3.688-18.519 1.842-14.813 14.764-24.074 29.53-24.074 7.384 0 12.918 1.853 18.456 7.41 3.692 5.556 3.692 11.108 3.692 18.516z m66.443-98.146l-22.145 142.59c0 1.852 1.846 3.704 3.688 3.704h22.15c3.692 0 7.384-1.852 7.384-7.408l22.148-140.738c0-1.853-1.846-3.705-3.692-3.705H832.16c-3.688 1.852-5.538 3.705-5.538 5.557z" fill="#179BD7" p-id="975"></path><path d="M426.106 690.878l11.072-68.519H298.75l77.52-503.69c0-1.852 0-1.852 1.846-5.557 0 0 1.846-1.852 5.538-1.852h191.953c64.6 0 107.052 14.813 131.048 40.74 9.226 11.11 16.61 24.074 22.148 38.888 1.842 18.518 1.842 35.183 0 55.554v16.665l11.073 5.556c7.385 5.557 16.61 9.261 22.149 16.667 9.226 11.113 16.61 24.074 18.456 40.739 1.848 18.518 1.848 38.888-1.846 57.406-5.538 24.074-11.072 44.445-23.994 64.815-9.226 16.665-22.15 31.479-38.76 40.74-14.764 9.26-33.222 18.517-49.832 24.074-22.149 5.553-40.606 7.405-60.909 7.405h-22.15c-22.148 0-40.605 16.67-44.297 38.891v7.406L520.236 685.32v5.557s0 1.852-1.846 1.852h-1.846c0-3.704-90.438-1.852-90.438-1.852z" fill="#253B80" p-id="976"></path><path d="M765.717 248.294c0 5.556-1.846 7.409-1.846 12.96-27.687 138.887-116.279 183.331-230.716 183.331h-59.063c-14.764 0-23.991 9.261-27.683 24.075l-29.533 192.587-7.381 55.558c-1.846 7.404 5.535 14.813 12.92 16.665h107.052c12.918 0 22.148-9.26 23.991-22.222v-5.556l20.303-125.925 1.846-7.405c1.846-12.962 12.922-22.222 23.995-22.222h14.764c101.515 0 177.189-42.593 203.03-161.108 9.226-49.997 5.537-92.59-20.303-120.369-11.072-7.408-18.458-14.813-31.376-20.37z" fill="#179BD7" p-id="977"></path><path d="M738.03 237.185c-5.539 0-7.385-1.853-12.919-1.853-5.538 0-9.23-1.852-12.922-1.852-16.61-1.852-35.068-5.557-51.678-5.557H505.472c-12.923 0-22.15 9.262-23.995 22.223L450.1 463.103v5.557c1.846-14.814 14.765-24.075 27.683-24.075h59.063c114.433 0 204.876-46.292 230.716-183.33 0-5.552 1.842-7.405 1.842-12.961-7.38-1.852-14.764-7.409-22.144-9.257l-9.23-1.852c0 1.852 0 0 0 0z" fill="#222D65" p-id="978"></path><path d="M481.477 251.998c1.846-12.96 12.918-22.223 23.995-22.223h155.039c16.61 0 35.067 0 51.678 5.557 5.538 0 9.23 1.853 12.922 1.853 5.534 0 7.38 1.852 12.92 1.852l5.538 1.848c7.38 1.852 14.764 5.557 22.148 9.261 7.38-49.997 0-85.185-27.687-114.812-29.53-35.183-84.904-50.001-153.193-50.001H385.5c-14.764 0-23.995 9.26-27.687 24.075l-81.211 529.616c-1.843 9.261 5.538 16.671 14.768 20.371h125.506l31.379-196.292c1.846 0 33.222-211.105 33.222-211.105z" fill="#253B80" p-id="979"></path></svg>';
    let coinbaseSvg = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" version="1.1" viewBox="0 0 32 32"><circle style="opacity:0.2" cx="16" cy="17" r="14"/><circle style="fill:#f7931a" cx="16" cy="16" r="14"/><path style="opacity:0.2" d="m 13,8 0,3 -3.0000007,0 0,2.000001 c 0,0 1.1456507,-0.01999 1.1273687,0 0.613377,-0.0093 0.808708,0.436058 0.872215,0.733073 l 0,6.600259 c -0.02351,0.1877 -0.0035,0.653333 -0.432202,0.666667 0.0198,0.01733 -1.5673817,0 -1.5673817,0 l 0,2 2.1688177,0 C 12.535544,22.98667 12.645729,23 13,23 l 0,3 2,0 0,-3 0.97917,0 0.04166,3 L 18,26 17.97917,23 C 20.52239,22.815365 22,21.597881 21.983179,19.5 22,17.570087 20.456651,16.506411 19.5,16.5 20.456506,16.503769 21,15.463447 21,14 21,12 19.619804,11 17.999999,11 l 0,-3 L 16,8 l 0,3 c -0.398082,0 -0.595857,-0.01467 -1,0 l 0,-3 z m 2,5.000001 C 17,13 18,13 18,14.5 18,16 17,16 15,16 Z M 15,18 c 2.666111,8.3e-5 4.000276,-0.166641 4,1.5 2.76e-4,1.666775 -1.333889,1.5 -4,1.5 z"/><path style="fill:#ffffff" d="m 13,7 0,2.9999995 -3.0000007,0 0,2.0000015 c 0,0 1.1456507,-0.01999 1.1273687,0 0.613377,-0.0093 0.808708,0.436058 0.872215,0.733073 l 0,6.600259 c -0.02351,0.1877 -0.0035,0.653333 -0.432202,0.666667 0.0198,0.01733 -1.5673817,0 -1.5673817,0 l 0,2 2.1688177,0 C 12.535544,21.98667 12.645729,22 13,22 l 0,3 2,0 0,-3 0.97917,0 0.04166,3 L 18,25 17.97917,22 C 20.52239,21.815365 22,20.597881 21.983179,18.5 22,16.570087 20.456651,15.506411 19.5,15.5 20.456506,15.503769 21,14.463447 21,13 21,11 19.619804,10 17.999999,10 l 0,-3 L 16,7 l 0,3 c -0.398082,0 -0.595857,-0.01467 -1,0 l 0,-3 z m 2,5.000001 C 17,12 18,12 18,13.5 18,15 17,15 15,15 Z M 15,17 c 2.666111,8.3e-5 4.000276,-0.166641 4,1.5 2.76e-4,1.666775 -1.333889,1.5 -4,1.5 z"/><path style="fill:#ffffff;opacity:0.2" d="M 16 2 A 14 14 0 0 0 2 16 A 14 14 0 0 0 2.0214844 16.585938 A 14 14 0 0 1 16 3 A 14 14 0 0 1 29.978516 16.414062 A 14 14 0 0 0 30 16 A 14 14 0 0 0 16 2 z"/></svg>';
    let usdtSvg = '<svg t="1663682664904" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1837" width="28" height="28"><path d="M1023.082985 511.821692c0 281.370746-228.08199 509.452736-509.452736 509.452736-281.360557 0-509.452736-228.08199-509.452737-509.452736 0-281.365652 228.092179-509.452736 509.452737-509.452737 281.370746 0 509.452736 228.087085 509.452736 509.452737" fill="#1BA27A" p-id="1838"></path><path d="M752.731701 259.265592h-482.400796v116.460896h182.969951v171.176119h116.460895v-171.176119h182.96995z" fill="#FFFFFF" p-id="1839"></path><path d="M512.636816 565.13592c-151.358408 0-274.070289-23.954468-274.070289-53.50782 0-29.548259 122.706786-53.507821 274.070289-53.507821 151.358408 0 274.065194 23.959562 274.065194 53.507821 0 29.553353-122.706786 53.507821-274.065194 53.50782m307.734925-44.587303c0-38.107065-137.776398-68.995184-307.734925-68.995184-169.953433 0-307.74002 30.888119-307.74002 68.995184 0 33.557652 106.837333 61.516418 248.409154 67.711363v245.729433h116.450707v-245.632637c142.66205-6.001353 250.615085-34.077294 250.615084-67.808159" fill="#FFFFFF" p-id="1840"></path></svg>';
    let epusdtSvg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2000 2000" width="32" height="32"><path d="M1000,0c552.26,0,1000,447.74,1000,1000S1552.24,2000,1000,2000,0,1552.38,0,1000,447.68,0,1000,0" fill="#53ae94"/><path d="M1123.42,866.76V718H1463.6V491.34H537.28V718H877.5V866.64C601,879.34,393.1,934.1,393.1,999.7s208,120.36,484.4,133.14v476.5h246V1132.8c276-12.74,483.48-67.46,483.48-133s-207.48-120.26-483.48-133m0,225.64v-0.12c-6.94.44-42.6,2.58-122,2.58-63.48,0-108.14-1.8-123.88-2.62v0.2C633.34,1081.66,451,1039.12,451,988.22S633.36,894.84,877.62,884V1050.1c16,1.1,61.76,3.8,124.92,3.8,75.86,0,114-3.16,121-3.8V884c243.8,10.86,425.72,53.44,425.72,104.16s-182,93.32-425.72,104.18" fill="#fff"/></svg>';
    let balanceSvg = '<svg t="1667286528642" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3646" width="32" height="32"><path d="M512 0c282.76736 0 512 229.23264 512 512s-229.23264 512-512 512S0 794.76736 0 512 229.23264 0 512 0z" fill="#EFC75E" p-id="3647"></path><path d="M266.24 276.48h471.04a51.2 51.2 0 0 1 51.2 51.2v61.44a51.2 51.2 0 0 1-51.2 51.2H266.24a51.2 51.2 0 0 1-51.2-51.2v-61.44a51.2 51.2 0 0 1 51.2-51.2z" fill="#A86A3F" p-id="3648"></path><path d="M737.28 276.48H266.24a51.2 51.2 0 0 0-51.2 51.2v20.48a51.2 51.2 0 0 1 51.2-51.2h471.04a51.2 51.2 0 0 1 51.2 51.2v-20.48a51.2 51.2 0 0 0-51.2-51.2z" fill="#975F39" p-id="3649"></path><path d="M368.26112 321.19808l320.53248-84.992a20.61312 20.61312 0 0 1 25.21088 14.39744l53.27872 196.73088a20.35712 20.35712 0 0 1-14.56128 24.94464L335.2064 582.99392a20.61312 20.61312 0 0 1-25.21088-14.39744l-39.13728-144.51712 97.40288-102.88128z" fill="#3DB39E" p-id="3650"></path><path d="M711.23968 441.01632l-69.24288 18.55488a10.24 10.24 0 0 1-5.30432-19.78368l59.35104-15.90272-31.7952-118.69184-59.35104 15.90272a10.24 10.24 0 0 1-5.30432-19.78368l69.24288-18.55488a10.24 10.24 0 0 1 12.544 7.23968l37.09952 138.46528a10.24 10.24 0 0 1-7.23968 12.55424z m-286.84288 76.86144l-69.24288 18.55488a10.25024 10.25024 0 0 1-12.544-7.23968l-37.09952-138.47552a10.24 10.24 0 0 1 7.23968-12.544l69.24288-18.55488a10.24 10.24 0 0 1 5.30432 19.79392l-59.35104 15.90272 31.7952 118.69184 59.35104-15.90272a10.24 10.24 0 0 1 5.30432 19.77344z" fill="#78CABB" p-id="3651"></path><path d="M218.03008 390.4c91.22816-52.34688 337.94048-194.03776 337.94048-194.03776a20.61312 20.61312 0 0 1 28.07808 7.38304l102.37952 176.24064c5.65248 9.73824 2.2528 22.21056-7.60832 27.86304L304.18944 622.83776a20.60288 20.60288 0 0 1-28.07808-7.38304s-29.32736-60.3648-58.08128-109.86496V390.4z" fill="#5ABEAC" p-id="3652"></path><path d="M363.25376 519.12704l-53.20704 30.72-61.44-106.42432 53.20704-30.72a10.24 10.24 0 0 0-10.24-17.73568l-62.07488 35.84a10.21952 10.21952 0 0 0-3.7376 13.9776l71.68 124.16a10.19904 10.19904 0 0 0 13.9776 3.7376l62.07488-35.84a10.24 10.24 0 0 0-10.24-17.7152z m271.1552-144.73216l-71.68-124.16a10.24 10.24 0 0 0-13.9776-3.74784l-62.07488 35.84a10.24 10.24 0 0 0 10.24 17.73568l53.20704-30.72 61.44 106.42432-53.20704 30.72a10.24 10.24 0 0 0 10.24 17.73568l62.07488-35.84a10.24 10.24 0 0 0 3.7376-13.98784zM389.12 338.65728A81.92 81.92 0 0 0 359.13728 450.56 81.92 81.92 0 0 0 471.04 480.54272a81.92 81.92 0 0 0-81.92-141.88544z" fill="#8CD2C5" p-id="3653"></path><path d="M757.76 368.64H256a40.96 40.96 0 0 1-40.96-40.96v368.64a51.2 51.2 0 0 0 51.2 51.2h491.52a51.2 51.2 0 0 0 51.2-51.2V419.84a51.2 51.2 0 0 0-51.2-51.2z" fill="#C47E4D" p-id="3654"></path><path d="M808.96 634.88h-81.92a71.68 71.68 0 1 1 0-143.36h81.92a20.48 20.48 0 0 1 20.48 20.48v102.4a20.48 20.48 0 0 1-20.48 20.48z" fill="#A86A3F" p-id="3655"></path><path d="M727.04 522.24a40.96 40.96 0 1 1 0 81.92 40.96 40.96 0 0 1 0-81.92z" fill="#ECC35D" p-id="3656"></path><path d="M757.76 368.64H256a40.96 40.96 0 0 1-40.96-40.96v20.48a40.96 40.96 0 0 0 40.96 40.96h501.76a51.2 51.2 0 0 1 51.2 51.2v-20.48a51.2 51.2 0 0 0-51.2-51.2z" fill="#CA8B5F" p-id="3657"></path><path d="M757.76 727.04H266.24a51.2 51.2 0 0 1-51.2-51.2v20.48a51.2 51.2 0 0 0 51.2 51.2h491.52a51.2 51.2 0 0 0 51.2-51.2v-20.48a51.2 51.2 0 0 1-51.2 51.2z" fill="#B27245" p-id="3658"></path></svg>';
    let paySvgArr = {
        zfbf2f: alipaySvg,
        aliweb: alipaySvg,
        mqq: qqSvg,
        mzfb: alipaySvg,
        mwx: weChatSvg,
        pszfb: alipaySvg,
        pswx: weChatSvg,
        wescan: weChatSvg,
        payjswescan: weChatSvg,
        alipay: alipaySvg,
        wxpay: weChatSvg,
        qqpay: qqSvg,
        paypal: paypal,
        mgcoin: otherSvg,
        coinbase: usdtSvg,
        epusdt: epusdtSvg,
        vzfb: alipaySvg,
        vwx: weChatSvg,
        alpha: alipaySvg,
        stripe_alipay: alipaySvg,
        stripe_wechat: weChatSvg,
        alipay2: alipaySvg,
        wechat2: weChatSvg,
        balance: balanceSvg,
    };

    const toastLiveExample = document.getElementById('liveToast')
    const toast = new bootstrap.Toast(toastLiveExample)
    // 付款方式按钮
    $('.pay-type').each(function() {
        let t = $(this)
          , type = t.data('type')
          , name = t.data('name');
        if (paySvgArr[type] !== undefined) {
            t.append(paySvgArr[type] + ' ' + name);
        } else {
            t.append(otherSvg + ' ' + name);
        }
    }).click(function() {
        $('.pay-type').removeClass('active')
        $(this).toggleClass("active");
        $('input[name=payway]').val($(this).data('id'));
    });


    



    // 懒加载
    const images = document.querySelectorAll('img');
    const callback=entries=>{
        entries.forEach(element => {
            if(element.isIntersecting){
                const image=element.target;
                const data_src=image.getAttribute('data-src');
                if(data_src!=null){
                    image.setAttribute('src',data_src);
                    observer.unobserve(image);
                    console.log('触发');
                }
                else{
                    return
                }
            }
        });
    };

    const observer=new IntersectionObserver( callback );

    images.forEach(image=>{
        observer.observe(image);
    })


    


});


