<template>
    <div class="chat-message">
        <div class="flex items-end">
            <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-2 items-start">
                <div>
                    <span class="px-4 py-2 rounded-lg inline-block rounded-bl-none bg-gray-300 text-gray-600">
                        {{text}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: "Received",
  props: {
    text: String,
  }
}
</script>