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
        
        <livewire:components.exp-table />
    </section>
</div>