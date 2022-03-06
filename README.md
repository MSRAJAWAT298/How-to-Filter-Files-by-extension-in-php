# How-to-Filter-Files-by-extension-in-php
How to Filter Files by extension in php
<ul class="explaination-list">
<li class="explaination-item"> 
			 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="
                            svg-inline--fa
                            fa-angle-right fa-w-8 fa-2x
                            dark-bullet
                        ">
                        <path fill="#00ab4f" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path>
                    </svg>
        The code starts by setting the maximum execution time to 0.</li>
<li class="explaination-item"> 
			 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="
                            svg-inline--fa
                            fa-angle-right fa-w-8 fa-2x
                            dark-bullet
                        ">
                        <path fill="#00ab4f" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path>
                    </svg>
        This means that the script will not stop running until it has finished executing all of its instructions.</li>
<li class="explaination-item"> 
			 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="
                            svg-inline--fa
                            fa-angle-right fa-w-8 fa-2x
                            dark-bullet
                        ">
                        <path fill="#00ab4f" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path>
                    </svg>
        Next, a variable called $moveFileNames is created and initialized with an empty array.</li>
<li class="explaination-item"> 
			 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="
                            svg-inline--fa
                            fa-angle-right fa-w-8 fa-2x
                            dark-bullet
                        ">
                        <path fill="#00ab4f" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path>
                    </svg>
        The code then iterates through each directory in the current working directory (M:/Mayank singh/) and checks if any files are present in that directory using is_file().</li>
<li class="explaination-item"> 
			 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="
                            svg-inline--fa
                            fa-angle-right fa-w-8 fa-2x
                            dark-bullet
                        ">
                        <path fill="#00ab4f" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path>
                    </svg>
        If there are files present, then they are checked for extensions using pathinfo() function.</li>
<li class="explaination-item"> 
			 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="
                            svg-inline--fa
                            fa-angle-right fa-w-8 fa-2x
                            dark-bullet
                        ">
                        <path fill="#00ab4f" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path>
                    </svg>
        If no extension is found, then continue checking other directories; otherwise, if an extension exists in the list of skipped file extensions ($skipFilesExtenion), then skip this folder and move on to check other folders.</li>
<li class="explaination-item"> 
			 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="
                            svg-inline--fa
                            fa-angle-right fa-w-8 fa-2x
                            dark-bullet
                        ">
                        <path fill="#00ab4f" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path>
                    </svg>
        If a folder does exist with no files or if it's a file without an extension, then we need to create a new folder at M:/Mayank singh/image-Type-extension/.</li>
<li class="explaination-item"> 
			 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="
                            svg-inline--fa
                            fa-angle-right fa-w-8 fa-2x
                            dark-bullet
                        ">
                        <path fill="#00ab4f" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path>
                    </svg>
        Then we need to rename our source file from M:/Mayank singh/image-Type-extension/image1.jpg to image1@2x~3dpi~transparent~RGB24bit@300ppi~jpeg2000@0kbpixlesize@Loss</li>
<li class="explaination-item"> 
			 <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="
                            svg-inline--fa
                            fa-angle-right fa-w-8 fa-2x
                            dark-bullet
                        ">
                        <path fill="#00ab4f" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path>
                    </svg>
        The code is a PHP function that filters files in the directory M:/Mayank singh/</li></ul>
