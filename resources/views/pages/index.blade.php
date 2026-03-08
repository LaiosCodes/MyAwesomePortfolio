<?php
 
use Livewire\Component;
 
new class extends Component {
    //
};
?>

<div>
    <div class="row">
        <div class="col">
            ~/
        </div>
        <div class="col-auto">
            <div class="d-inline-block">
                <a href="/blog" title="blog">Blog</a>
                |
                <a href="#"><i class="fa-brands fa-github"></i></a>
                |
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                |
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>

            </div>
        </div>
    </div>
    <p></p>
    <h2>Alisson Luís (A.K.A. Laios)</h2>
    <p>Brazilian Software Engineer</p>

    <div class="text-center w-100 mb-5">
        <p class="small"><em>"I like coding the way a Brazilian likes a good cup of coffee. And, surprisingly, I also love coffee."</em> <i class="fa-solid fa-coffee"></i> <i class="fa-solid fa-code"></i></p>
    </div>

    <section class="my-4">
        <h3>$ ls -lhtc ./stacks-n-tools</h3>
        
        <table class="table table-sm table-borderless">
            <tbody>
                <tr>
                    <td><span class="file-info">drw-rw---- 1 root root 4.0K Mar 9 2017</span></td>
                    <td><span class="exp-text">PHP</span></td>
                    <td><a href="#" data-bs-toggle="collapse" data-bs-target="#php-info-collapse"><i class="fa-regular fa-folder fa-xs"></i></a></td>
                </tr>
                <tr">
                    <td colspan="3"><div class="collapse border-bottom" id="php-info-collapse">
                        <div class="">
                            <span>$ cat php_info.txt</span><br>
                            <div class="markdown-body p-2">
                                <p># First contact with PHP and programming</p>
                                <p>
                                    In 2017 (age 15) at _IFC_ (Instituto Federal Catarinense), where I had my first experience with programming, and where I also developed a strong passion for it.</p>
                                <p>
                                    In fact, the passion was so strong, this website you're viewing is in PHP (Laravel + Livewire)! 
                                </p>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="file-info">drw-rw---- 1 root root 4.0K Fev 8 2018</span></td>
                    <td><span class="exp-text">JavaScript</span></td>
                    <td><a href="#" data-bs-toggle="collapse" data-bs-target="#javascript-info-collapse"><i class="fa-regular fa-folder fa-xs"></i></a></td>
                </tr>
                <tr>
                    <td colspan="3"><div class="collapse" id="javascript-info-collapse"><span class="file-info">informações</span></div></td>
                </tr>
                <tr>
                    <td><span class="file-info">drw-rw---- 1 root root 4.0K Fev 8 2018</span></td>
                    <td><span class="exp-text">HTML</span></td>
                    <td><a href="#" data-bs-toggle="collapse" data-bs-target="#html-info-collapse"><i class="fa-regular fa-folder fa-xs"></i></a></td>
                </tr>
                <tr>
                    <td colspan="3"><div class="collapse" id="html-info-collapse"><span class="file-info">informações</span></div></td>
                </tr>
                <tr>
                    <td><span class="file-info">drw-rw---- 1 root root 4.0K Jun 20 2022</span></td>
                    <td><span class="exp-text">Flutter</span></td>
                    <td><a href="#" data-bs-toggle="collapse" data-bs-target="#flutter-info-collapse"><i class="fa-regular fa-folder fa-xs"></i></a></td>
                </tr>
                <tr>
                    <td colspan="3"><div class="collapse" id="flutter-info-collapse"><span class="file-info">informações</span></div></td>
                </tr>
            </tbody>
        </table>
    </section>
</div>