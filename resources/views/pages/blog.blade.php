<?php
 
use Livewire\Component;
 
new class extends Component {
    public function render()
    {
        return $this->view()
            ->title('Blog - ' . config('app.name'));
    }
};
?>
<div>
    <x-slot:pageTitle>blog</x-slot>
    
    <br>

    <h3>$ ls -lhtc .</h3>

    <p class="text-muted">No blog posts yet. Stay tuned!</p>
</div>