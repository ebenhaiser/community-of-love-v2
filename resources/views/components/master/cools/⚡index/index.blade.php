<div>
    <div class="table-card-custom">

        {{-- Header --}}
        <div class="table-header-control">

            {{-- Search --}}
            <div class="table-search-box">
                <i class="bi bi-search table-search-icon"></i>

                <input type="text" class="table-search-input" wire:model.live.debounce.300ms="search"
                    placeholder="Search code, name, address...">
            </div>

            {{-- Filter --}}
            <div class="table-filter-group">

                <div class="dropdown">
                    <button class="btn-table-action dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-funnel"></i>

                        {{ $status ?: 'All Statuses' }}
                    </button>

                    <ul class="dropdown-menu">

                        <li>
                            <button type="button" class="dropdown-item" wire:click="$set('status', '')">
                                All Statuses
                            </button>
                        </li>

                        <li>
                            <button type="button" class="dropdown-item" wire:click="$set('status', 'ACTIVE')">
                                Active
                            </button>
                        </li>

                        <li>
                            <button type="button" class="dropdown-item" wire:click="$set('status', 'INACTIVE')">
                                Inactive
                            </button>
                        </li>

                    </ul>
                </div>

                <button type="button" class="btn-table-action">
                    <i class="bi bi-file-earmark-arrow-down"></i>
                    Export
                </button>

            </div>
        </div>


        {{-- Table --}}
        <div class="table-responsive">

            <table class="table-custom">

                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Address</th>
                        <th>Gembala</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($gridDatas as $data)
                        <tr wire:key="cool-{{ $data->id }}">

                            <td class="table-order-id">
                                {{ $data->code }}
                            </td>

                            <td class="table-product-name">
                                {{ $data->name }}
                            </td>

                            <td>
                                {{ $data->description ?: '-' }}
                            </td>

                            <td>
                                {{ $data->address ?: '-' }}
                            </td>

                            <td>
                                {{ $data->activeGembala?->user?->name ?? '-' }}
                            </td>

                            <td>
                                <span class="badge-table success">
                                    {{ $data->status }}
                                </span>
                            </td>

                            <td>
                                <div class="d-flex justify-content-center gap-1">

                                    <a href="#" class="table-btn-action" title="View details">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a href="#" class="table-btn-action" title="Edit row">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <button type="button" class="table-btn-action delete" title="Delete row">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                </div>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="7" class="text-center py-4">
                                <i class="bi bi-inbox fs-3 d-block mb-2"></i>
                                No cool data found.
                            </td>
                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>


        {{-- Footer --}}
        <div class="table-footer-control">

            <span class="table-pagination-info">
                Showing
                {{ $gridDatas->firstItem() ?? 0 }}
                to
                {{ $gridDatas->lastItem() ?? 0 }}
                of
                {{ $gridDatas->total() }}
                entries
            </span>

            {{ $gridDatas->links() }}

        </div>

    </div>
</div>
