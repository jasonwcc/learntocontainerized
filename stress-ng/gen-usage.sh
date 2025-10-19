stress-ng --cpu 1 --vm-bytes $(awk '/MemFree/{printf "%d\n", $2 * 0.9;}' < /proc/meminfo)k --vm-keep -m 1
