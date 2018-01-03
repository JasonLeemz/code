import hashlib


class Codec:
    store = {}

    def encode(self, longUrl):
        """Encodes a URL to a shortened URL.
        :type longUrl: str
        :rtype: str
        """
        m = hashlib.md5()
        m.update(longUrl)
        mm = m.hexdigest()

        if not self.store.get(longUrl):
            self.store[longUrl] = mm
            self.store[mm] = longUrl
        return mm


    def decode(self, shortUrl):
        """Decodes a shortened URL to its original URL.

        :type shortUrl: str
        :rtype: str
        """
        if self.store.get(shortUrl):
            return self.store[shortUrl]

        return ""


# Your Codec object will be instantiated and called as such:
codec = Codec()
url = "http://www.baidu.com"
print codec.decode(codec.encode(url))
