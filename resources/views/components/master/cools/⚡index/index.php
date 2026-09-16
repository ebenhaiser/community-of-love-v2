<?php

use App\Models\Cool;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component
{
    use WithPagination;
    public string $title = 'Cool';
    public string $subtitle = 'Manage Cool';
    public string $mainTitle = 'Master';

    #[Url(as: 'q', except: '')]
    public string $search = '';

    #[Url(except: '')]
    public string $status = '';

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedStatus(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        return $this->view([
            'gridDatas' => Cool::query()
                ->with('activeGembala.user')
                ->when($this->search !== '', function ($query) {
                    $query->where(function ($query) {
                        $query
                            ->where('code', 'like', "%{$this->search}%")
                            ->orWhere('name', 'like', "%{$this->search}%")
                            ->orWhere('description', 'like', "%{$this->search}%")
                            ->orWhere('address', 'like', "%{$this->search}%");
                    });
                })
                ->when($this->status !== '', function ($query) {
                    $query->where('status', $this->status);
                })
                ->latest()
                ->paginate(10),
        ]);
    }

    public function create()
    {
        // return redirect()->route('master.cools.create');
    }
};
