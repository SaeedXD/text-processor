<div class="relatice z-20 flex h-full w-full flex-col gap-8 px-4 py-10 sm:px-28">
    <div class="z-20 flex w-full flex-col rounded-xl bg-slate-200 px-6 py-4 shadow-lg">
        <h1 class="text-xl font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                class="inline h-6 w-6 text-blue-800">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
            </svg>
            Text
        </h1>
        <span class="mt-2 mb-4 w-full border-b-2 border-dashed border-neutral-400"></span>
        <label for="text" class="font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="mb-0.5 inline h-5 w-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
            Input text:
        </label>
        <div class="flex items-center rounded-lg rounded-tl-none bg-gray-300 py-1.5 pr-1.5">
            <textarea name="text" wire:model.debounce.500ms="text" id="text" cols="0" rows="0"
                class="min-h-[12rem] w-full resize-none overflow-auto bg-transparent px-4 !text-start outline-none"
                style="unicode-bidi: plaintext !important;" placeholder="write your text here ..."></textarea>
        </div>

        <div class="mt-4 flex items-center flex-wrap gap-1">
            <span class="font-medium mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mb-0.5 inline h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Method:
            </span>

            <label for="method-1" class="flex items-center mr-3">
                <input id="method-1" type="radio" value="getHighlights" name="method" wire:model="method"
                    class="peer h-4 w-4 border-gray-300 bg-gray-100 text-blue-600">
                <span class="ml-1 text-sm peer-checked:text-blue-600">Highlights</span>
            </label>

            <label for="method-2" class="flex items-center mr-3">
                <input id="method-2" type="radio" value="summarizeTextBasic" name="method" wire:model="method"
                    class="peer h-4 w-4 border-gray-300 bg-gray-100 text-blue-600">
                <span class="ml-1 text-sm peer-checked:text-blue-600">Basic Summarization</span>
            </label>

            <label for="method-3" class="flex items-center mr-3">
                <input id="method-3" type="radio" value="summarizeTextCompound" name="method" wire:model="method"
                    class="peer h-4 w-4 border-gray-300 bg-gray-100 text-blue-600">
                <span class="ml-1 text-sm peer-checked:text-blue-600">Compounds Summarization</span>
            </label>
        </div>


        <div class="mt-2 flex items-center flex-wrap gap-1">
            <span class="font-medium mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mb-0.5 inline h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
                </svg>
                Language:
            </span>

            <label for="language-1" class="flex items-center mr-3">
                <input id="language-1" type="radio" value="English" name="language" wire:model="language"
                    class="peer h-4 w-4 border-gray-300 bg-gray-100 text-blue-600">
                <span class="ml-1 text-sm peer-checked:text-blue-600">English</span>
            </label>

            <label for="language-2" class="flex items-center mr-3">
                <input id="language-2" type="radio" value="Persian" name="language" wire:model="language"
                    class="peer h-4 w-4 border-gray-300 bg-gray-100 text-blue-600">
                <span class="ml-1 text-sm peer-checked:text-blue-600">Persian</span>
            </label>
        </div>
    </div>




    @if (!empty($result))
        
        <div class="z-20 flex w-full flex-col rounded-xl bg-slate-200 px-6 py-4 shadow-lg">
            <h1 class="text-xl font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="inline h-6 w-6 text-blue-800">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                </svg>
                Result
            </h1>
            <span class="mt-2 mb-4 w-full border-b-2 border-dashed border-neutral-400"></span>
            <label for="text" class="font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mb-0.5 inline h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                </svg>
                Highlighted sentences is your result:
            </label>
            <div class="flex items-center w-full rounded-lg rounded-tl-none bg-gray-300 py-1.5 pr-1.5">
                <div class="min-h-[12rem] w-full overflow-hidden bg-transparent px-4 !text-start whitespace-pre-wrap break-words overflow-x-hidden selectable" style="unicode-bidi: plaintext !important;">@php
                    $newText = $text;
                    foreach ($result as $key => $sentence) {
                        $newText = str_replace($sentence,
                        'STARHTMLHIGHLIGHT' . $sentence . 'ENDHTMLHIGHLIGHT',
                        $newText);
                    }
                    echo str_replace(['STARHTMLHIGHLIGHT', 'ENDHTMLHIGHLIGHT'], ['<span style="color:blue;background:#ffffffaa;border-radius:4px;padding-left:2px;padding-right:2px;">', '</span>'], htmlspecialchars($newText));
                @endphp</div>
            </div>

        @endif

    </div>
</div>
