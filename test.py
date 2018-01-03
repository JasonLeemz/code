# -*- coding: utf-8 -*-

import time
import threading
import Queue

# lock = threading.Lock()

#待发送队列
awaite_queue = Queue.Queue()

def enqueue(data):
    awaite_queue.put(data)

def call(data):
    pass

def send():
    while True:
        if not awaite_queue.empty():
            call(awaite_queue.get())



queue = Queue.Queue()

def queue_write():
    while True:
        for i in range(10):
            queue.put(i)

        time.sleep(2)
        print "==================================="


def queue_read(thread_no):
    while True:
        if not queue.empty():
            # lock.acquire()
            print "线程id：%s" % (thread_no)
            print "内容：%s" % (queue.get())
            print "--------------------------------"
            # lock.release()


if __name__ == "__main__":
    t = threading.Thread(target=queue_write)
    t.start()

    for i in range(10):
        t2 = threading.Thread(target=queue_read, args=(i,))
        t2.start()

    while True:
        pass
