-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 05:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitape`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `id_device` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `url_gambar` text NOT NULL,
  `status` int(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id_device`, `nama`, `harga`, `deskripsi`, `url_gambar`, `status`) VALUES
(1, 'iPhone XR', 100000, '<p><br></p><h1>Ini Deskripsi</h1><p><br></p><p>Testing</p><p>Heytayo</p>', 'https://cf.shopee.co.id/file/f1453657426b4e11d10a2d9bc4391360', 0),
(1088, 'Samsung J4+', 20000, '<p>Hape mantep banget</p>', '', 0),
(1089, 'iPhone 6s', 80000, '', 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//92/MTA-2753920/apple_apple-iphone-6s-plus-32gb-smartphone_full12.jpg', 0),
(1090, 'Samsung Galaxy A70', 80000, '<p>Ini hape bagus</p>', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxEQEBEQEBAQERAQFhYPEBAREBERERYRFhYXFxYSFhYZHioiGRsoHBcWIzMjJystMDAwGCE2OzYuOiovMC0BCwsLDw4PHBERHC8nIScvLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLzovL//AABEIAMABBwMBIgACEQEDEQH/xAAbAAEAAwADAQAAAAAAAAAAAAAAAQUGAgMEB//EAEoQAAEDAQUCCQYJCwMFAAAAAAEAAgMRBAUSITEGQQcTIlFhcXKx0RYyNFSRkhQXI1JzgbPBwzNCU2KCoaOywtLwFaLhNUNEY5P/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAwQFAQIG/8QALxEAAgECBAQEBgMBAQAAAAAAAAECAxEEEiExBTJBURMiM2EUcYGhwfCRsdFCFf/aAAwDAQACEQMRAD8A+4oiIAiIgCKEQEooRASihEBKKEQEooRASihEAREQBFFVKAIiVQBERAEREAUqFKAKFKIAoUogIREQEoiIAiIgIREQBeO87cyCJ0r/ADW7hqScg0dJXsWX26PycI3cZX6w00716hHNJRPM5ZYtlVadrrQTVrIo27mmr3U6TouvyutHOz3R4LG7X3o+zMDow0uc7BygSNOtVezN+zTyvjmawYW4wWAjfvFSr/h0VJQtqUc9Vxz30Po3ldaOdvujwTyutHO33R4LPIpfh6fYj8ap3NF5W2nnZ7o8Fx8rZ+dnujwWfRPh6fYePU7nC/uFG0wycTCxksu8loIBpXDQUqaEbxSq8DeFO898UVRzMaP6lSWax4pp5TqKjpq58hP7gPYuueCmfzs/q3Ki4Jt2RuYbDKpC7bLx3C1eI1ij9xn9y6ZeGO3t1ij9xn9yzU9nyVTaYSKgjIrqoX2PVTDqO1za/HZbc/k2cnM/JNyHvLmzhntxFRGyh/8AWz+5fL7TZ6HQnpFf3rtsxrklGjmqZJIqWPrN38KV5TgmKKE4dQWsB6/OXs+MC9v0MXsZ/cvnV32ktdE9lccfIcxgqXNoc6b1prDerZXFpa+N40DxSvUtJ8MSev4KtWpUhrFaGjZwo26zljrZYg6Fxw42DAfqOIgnTI0619Wuu8Y7TDHPC7FFK0PY7oO48xXwm+3F8EjHEuFDkTXXUr6VwQvJu4DcJHEdGINeR7XFUMZhfAa9z3Qq51dm4REVMsBSoUoAiKEBKhSoQBERASiIgCIiAhERAFl9uPMh7Z7lqFltuDyYR+sT7APFSUfUiR1uRnyThOYTFCG5Eyn+Uqj2Bje20S8ZWvFilct/MrnhWJEUOHXjiP8AaVScH5k+ES8ZWojFK81VbfrIrR9B/vU+gBCiK6VGEUqEOW1M7YGl0krBo5wr78mS7bdZTiJoKNoNRWlNaLsuIDjZDmXOc1jWgVOb31cvVeV3zNJGAEVHKFamgoAfYqGy2PtsA4qlDZaFO6wvAxFtG5HUb9F57bYgRWgy16lbT8dVzC3QYC4ADfXdkcyutllNKvOVSzLWo1Vui49SaUYz5jGWizYTlvBCqbRYHM5Ta9Wq3s1gjFD3rxWmyilFq/D4evBJcy69jKqYR5myquTaeKFuF9nLT+c9hqT0kHNX9lvWy2vkteMW5ruS8dI/4VFLYh0rxSXc3WlDrUZFTfA1oK8ZqXzVv6KE+HtvNszVWizWijm4mvZQ5nJ31r6pwQf9P/b/AA2L4L8MtjG4WTOw0pRwDjTrIqvvHA88GwuG9rxX642LF4tm8uaLW5FClKnzG8REWMTBSoRASoUqEBKhSoQBERASiIgCIiAhERAFlNuf/H63f0rVrJ7c62frd/SpaHqIjrcjPn+2dyOtbGhkgY6KQvbVtQcqKruK4ZLPK+SWQOcWhga1hYABnvWxtMhY7ENWvxDrFF47dajNIZHBrSaCjdMloeGs6lYzlNqLjfqdCIpU1yNsKEQr0dseLZbkm0PGbg4ClM6YpNFdSF0gOeHm69aqs2PhxfCOh7f5pFqW3dXNoA6SVQp+7PqMPVUaMb7mPvKwShoo89dMzvFSqY8Y2oc7Fv8Ar6favpE13PpSgPVmqW3bOudUubhO7IgqZwjLVMtU8Ur62MiH1FM6rolYV7bxsDoHYXSsG8BzgHUz5+o+xeMxkgGoIOYINahWcHiJU3lZbeWesWjxvjqvO+Eqx4tcooC7QZc+5bH/AKCitiN0r7lUbPkeor7JwN+hydtn2TF86FgcQ6jcWR0od3MvovA56HJ22fZMWHxXFOu43VrXMzH04wcXF33PoCIixiiFKhSgCIoQEqFKIAiIgCIiAIiICEREAWV25GUB34yPaB4LVLLbcHKAfrk+wDxUlH1ER1eRmWvD8/tKvVjeWr+0q5a0djK6ktFTRchF0rgoouOL6M9JrqdnFdPShi6a5VXXRCFy0u4uuxVXA+QPnwPwgEE5nM4pKCi0VivOYkgMEpb5wbXLrO5ZzZ+MF85JyBGR0PKk1Vw+0yO+TYQG/MY0Nb7AsSc5Rm7M+ywkVLDxVltu/wBuWjL6nDsoz1BzQB111XnvDasRkCaSJpOQjdTHX5oAJz6F5v8ATpSMVA1vOXBv7iucFissZMrohJam5RyOjBDKb6nMkIp1GdnGmleCTftcp9rLj+HCKSYMhdHXBCaudR1KukI0NAOSFws11wQxshaHtIzc8lzmEaksH5p6MwvfbZqnMl2dannXh49zQaNbQ6hw7uYrVwdHxE29z2sNlWePMdNnswc90bmyNe04aYHODuZzaDMHcrgbJTyYWMcYHOzxTR1aGjdhDgQTu6joquW95hKJY5ZGYPNFcm5aU0KvrDts7ExlqbGQ40MgLmbq1I0V2tRr06eaNlprbdfyV6rxEo3k/n7FheGy8EEBc97nyUoC00GKhJNObIr3cDzB8AJ3l4r9UUa9NoeJoJBxD42+a1zyw4mFtcTaHIbvrXm4HnVsDhzPH74o1kVqsppZm38zLq1M1r7m7REVc8BSoUoAoUogIUoiAhFKIAiIgCIiAhERAFk9uB6Od2Jw/lWsWX2482DtnuUtH1ER1eRmUvLzn9oqvVhePnP7ZVetaK0Ml7hSiLoJUIiAr9mXU+EZNNXNGY05Ui9s0lNDTq/4VZs+0l87QdXD24pFdXdZ20c6U0LHFrhzAae1fPV8zk7bH2WBajRTZxFodQVP7Nf8oukvLjnkFJo5zi0UbXIdC5Obko6clHcvxilsjy2mQaUyG9eV2gJ0Oi9VoaKUXCz2cOLqlowNL6F1MhuCu4fHeE819Cx5YxucLJdr5A7AxxoMRIFaBcIrC0kEOBNchSmavLjvtkDZGujxtlAJ0Bq3zR0BVD3FxOEakmg0Fdy3aOKnWd3pHozPSqOt59EmWtptj2WdgD3g8qtCdAKAd60HA8KWJ53GQU/+Uay8j/kqvqRG1wJ5ySaN6+largg9APb/AA41k4urCU3BWunrb3KHEFaSvG2sjdIiKoZ4UqFKAIihASoREAREQEoiIAiIgIREQBZfbfzYO2e4LULLbc+bZ/pD3KWj6iI6vIzKXj5z+2V4F77x86TtleFay2Rk9WFClAF1AUU0XJQUB4dk46vtDs6hwp7z/FXVviBc8ABxcGkndUA1+5UOy87GyTtcx0rnEYYg7CMnSVe52lBktWx8DgCY52Ab4pRK3/cFh4hylBxgtbn1mFTVOMrPY81iuqubg/IZAAU69V0WuENBqvZar4bGKNfjJo0NfGWOpuzNAucV1SS/LSkFnncWx3KI6CPuWWo1ZPWNrb21ZaVRxeabsuiKe7rpknfRoo0edIQS0D7z0LTXzc8MdikYxjSWjHjI5VQKk1XbHejcLWQxgACjWNLR3qnvW3yPjkEmJpo5mA5UdlqOkFVsRWxEZOGW0e7T/PU8561apF7JNOxTx3YHxMkxFlatzGR5qdNF32ezxxg4nNJ686dS8RmJAbXJug+9dUrnEBtagZgHQV3qNY7EqORS0NVYaUpXb3ZZRjji9jOS1rXSOIGjQKZDnJoFpOB/0A9sfZxqguGyP4qYtzeWHM5NwjOn+cyv+CD0A9v8ONaHDo2gzB4pJOqoxei/X9zdIiLRM4KVClAFClEAUKVCAIiICUREAREQEIiIAVl9uNLP9Ie4LULK7daWf6Q9wUlH1ER1uRmWvHz5O2VXr23l58nbK8a11sjJe5CkKFyXQcqriVBXIIDjwfWESTWhzhyWlocegPkIbTrW1tkDIyXDCzHoypr2zzUWX4N5Wsbay7P5RtG85rIrK2Pmmkxsa5zQQ124U+vcsmEM0m+3+m9Cr5UpPRIvLJcUL28YaSOfRzXlugGlK7l7vgUUTSS4tYKGhIwN6uZehnycTABWjQBuGm9Vl43s6JhLuL5qUJr0aqvOoo+ZiCnUaS1+p13jbrNGwtjwSOkqcMdC7Pq80dJWMvhxxPfIRjfmWh1QK0A+5XkVqc2YyykPx0aWtaOS3dh5+lcdubO0wMkbnQgac+lf83qnjKnlySaTey6/NF/CXo4hQs/N/wBX+yRi2OXqlkaxgOrnaA6ZLx2drnMLo6EjLA7Ig9a5wMe57XSNNNGg0oTuA6FnLCVMySX1PonKM1vot139i1/1ji4XxhsofIype3k4WluW469y0vBB6B+2Ps41VWeHE19BiNHY3u0BpoOcq14IPQD2x9nGtqjQdKFrny+PyZ0orXrrfU3SIilKQUqFKAIiIAiIgCIiAKFKhASiIgIREQArK7daWf6Q9wWqWW270s/0h7gpKPqIjq8jMleR+Uk7ZXjXrvA/KSdsryLXWyMl7shcwVwUroClQpogLXgoDa2uoBONtCR0yL6A+ztJrSm/LIHrWC4J2g/DK/PZ3yL6A6mhOSxZrVmrG/U65DUUGmiyd62R08xYDSKLN7txduaOen3q7nlldI2OKoZnjlIyA+a3nd3LhbAGNwjIBQTgpb9C9Rk6bujPW75N7MGYyFfuXl2htRFnLZHEkOaaVywtzKm8Z8J10zWevK1mRoYTiceSfrIAWNjm61WCtt/prUKDbjJ9NTxXPE973FocWAAyFmZ80nIbzULUWO43uY2SSQNrmGauFV49n7nks0kvGhuKNoe2hJaSeSwV35uOXO1d8LnTzGJnJYHYXyCta9C3cNGMYJT37HcRXlVcpUJJRSvm9rf2dl6WxzRxFnA5IJkdlkzpO4mtSelXPBB6Ae2Ps413ssMcUL2MAphdiNBVxwnM868/BD6Ae2Ps41axDTSSR8vRxUK11Bbdesvd/j2N0iIqxYClQpQBERAEREAREQEIpUIAiKUBCIiAgrK7d6Wf6Q9y1aym3mlm+kPcpKPqIjq8jMjb/wApJ2yvMu+3flJO0V0LXWyMp7kKVCLpwlSoRAXPBIMrZ22d8i+hOaDqvjWx94SwutAikwAkOdkCMnSc6tjtBaCSxtoBIzEdcRPQa/dRYslJO9urPo6GAnVhdWtY+jvJbrym7iqS+7VGwUc8Au81teUeoKphvrjGkxlwbSrjNK4Z7wGDMgKnvRjGnHifNM784EAAfNaDuVepUTj5SXC4GUalpy07W1/noiH2eSapjBaz57sh7NSqW9IwDhDsWA8pwFOVuaOrVWks0jmNDjI0DOjXYa9Y3qLJdwlwsLXYAa1qMT3c1PvValw6tm8WrZdkr79DYhXUOZ6I43Nb7RMxznuMjnYYoyRTE4VwjLUAlziehbK6rvbBGGDM6vcdXO3krjYLubGQ6gq0YWNHmtB1p3f4VYBalKhZqUtWtvyfFcX4nGtJ0sOssL6269vovu9TqtX5N/Zd3FVnBB6AfpPw41Z2v8m/su7iqzgh9AP0n4ca9ViDhm0jdIiKA1gpUKUAREQBERAEREAUKVCAKURAQiIgCye3uln+kPctYVmtubFJLZw+MFz4XiTC0VcWUIcAN5oa06F7pNKaZ4qaxZiLb+Uk7RXSuBtQkq8EGuuYrXq1UCRbK2Mlp3OxFx4wdKY+tAckXEO6D7Er0H2IcOvYqwRTG1cbidgLeQHYQRil1protBZbFBJ8myCKJzm8Yx7G1c3cKnevmUl+Wm6re+VkfGRTNo5hqA9uIuGE0ycC5yvrPwu2VmfwGdrjrh4vvyWTJLN5uhaqzxd06Unl0tZ2t9DSzXRaATQdFQXEHpB3LqgslqZkYSTzgGp+tUvxzWb1O0+2PxT457L6nafbH4r3GcIu6ZdXFcdltKkn9vyaFl1WiQ8pgYP1iSVe3bd4izJq7QZZALA/HNZvU7T/AA/FPjls3qdp/h+K9uspO8ncpYnE4+vHJlyrsv8Ab3PpFjs/FgjG99XOfV5qRiNcI6Aot9oMcZcACRQAE0FSQBU7hmvnHxy2b1O0/wAPxXGThisrgWusVoIORB4sgj2rz4kbblBYWu6macb667G9htznxziRrGljCSWOJbhIdzgEaFdfBB6ATzyfhsXyq/uEd9ohdZLBY3WcTVje85yEOyLWtaNSMt5X2fg4uiSyXdDHM3DM6ssjN7S7Rh6Q2gUM5XNWhSUJSko5U9l++5qERFGWgpUKUAREQBERAEREBCIiAKVCIAiIgCiilEBV2q4LLK7G+CMv1LsOFx6yNV1+TFj9XZ7XeKuES77nLIpvJex/oG+1/ig2XsY/7Dfa8/erlF3M+5zKindszZDl8HZ9WIfeuPkpY/0Dfef4q6RM0u4yopJtlLE9oa+zRuaNxxfvzzXUNiru9Th90+K0CLl33O2Rn/Iu7vU4fdPinkXd3qcPunxWhRDpnvIq7vU4fdPinkVd3qcPsPitBRKIcsZ7yKu71OD3T4qfIq7vU4PdPitBRKILFXd+z1kgOKGzQxu+c2Nod7dVaBKJRcOhFKLoIUoiAIiIAiIgCIiA/9k=', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_device` bigint(20) UNSIGNED NOT NULL,
  `tanggal_sewa` datetime NOT NULL DEFAULT current_timestamp(),
  `tanggal_kembali` datetime NOT NULL,
  `harga` int(11) NOT NULL,
  `status` int(3) NOT NULL,
  `nik_penyewa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `id_device`, `tanggal_sewa`, `tanggal_kembali`, `harga`, `status`, `nik_penyewa`) VALUES
(101234, 1, '2021-12-28 15:21:11', '2021-12-30 15:20:25', 100000, 0, '3515171702010003'),
(101236, 1090, '2021-12-28 15:21:00', '2021-12-30 15:20:00', 200000, 0, '3515171702010003'),
(101238, 1088, '2021-12-29 22:25:00', '2021-12-30 22:25:00', 100000, 1, '351517');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD UNIQUE KEY `id_device` (`id_device`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_device_fk` (`id_device`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `id_device` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1091;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101239;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `id_device_fk` FOREIGN KEY (`id_device`) REFERENCES `device` (`id_device`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
