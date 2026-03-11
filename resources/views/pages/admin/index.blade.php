<?php
 
use Livewire\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts/admin.blade.php')] 
class extends Component {
    public function render()
    {
        return $this->view()
            ->title('Blog - ' . config('app.name'));
    }
};
?>
<div>
    this is admin
</div>